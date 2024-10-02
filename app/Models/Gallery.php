<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Spatie\Translatable\HasTranslations;

class Gallery extends Model
{
    use HasFactory;

    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category',
        'images',
        'apartment_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category' => 'array',
        'apartment_id' => 'integer',
        'images' => 'array',
    ];

    public function apartment(): BelongsTo
    {
        return $this->belongsTo(Apartment::class);
    }

    public static function getForm(): array{
        return [
            TextInput::make('category')
            ->label('Nazwa kategorii')
            ->unique(ignoreRecord: true)
            ->minLength(3)
            ->maxLength(255)
            ->required(),
        FileUpload::make('images')
            ->label('Zdjęcia')
            ->directory('gallery')
            ->getUploadedFileNameForStorageUsing(
                fn(TemporaryUploadedFile $file): string => 'hotel-jan-galeria-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
            )
            ->multiple()
            ->appendFiles()
            ->image()
            ->reorderable()
            ->maxSize(8192)
            ->optimize('webp')
            ->imageEditor()
            ->maxFiles(12)
            ->panelLayout('grid')
            ->imageEditorAspectRatios([
                null,
                '16:9',
                '4:3',
                '1:1',
            ])
            ->required()

            ->columnSpanFull(),
        ];
    }

    public $translatable = ['category',];

}

