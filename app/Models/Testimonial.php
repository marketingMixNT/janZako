<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

use Spatie\Translatable\HasTranslations;


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
        ];
    }

    public $translatable = ['content',];

}

