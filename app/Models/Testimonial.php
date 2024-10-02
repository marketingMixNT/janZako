<?php

namespace App\Models;

use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;

use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Testimonial extends Model
{
    use HasFactory;
    use HasTranslations;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'source',
        'content',
        'sort',
        'apartment_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'array',
        'source' => 'array',
        'content' => 'array',
        'apartment_id' => 'integer',
    ];

    public function apartment(): BelongsTo
    {
        return $this->belongsTo(Apartment::class);
    }

    public static function getForm(): array
    {
        return [
            TextInput::make('name')
                ->label('Imię i nazwisko/pseudonim')
                ->minLength(3)
                ->maxLength(255)
                ->required(),

            TextInput::make('source')
                ->label('Źródło opini')
                ->minLength(3)
                ->maxLength(255)
                ->required(),

            Textarea::make('content')
                ->label('Treść opini')
                ->required()
                ->autosize()
                ->columnSpanFull(),

            Toggle::make('home')
        ];
    }

    public $translatable = ['content',];
}
