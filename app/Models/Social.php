<?php

namespace App\Models;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Social extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'link',
        'apartment_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'apartment_id' => 'integer',
    ];

    public function apartment(): BelongsTo
    {
        return $this->belongsTo(Apartment::class);
    }


    public static function getForm(): array{
        return [
            Select::make('name')
                ->label('Platforma')
                ->required()
                ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                ->live()
                ->searchable()
                ->preload()
                ->options([
                    'facebook' => 'Facebook',
                    'instagram' => 'Instagram',
                    'twitter' => 'X/Twitter',
                    'tiktok' => 'TikTok',
                    'youtube' => 'YouTube',
                    'linkedin' => 'LinkedIn',
                    'tripadvisor' => 'TripAdvisor',
                ]),


            TextInput::make('link')
                ->label('Link')
                ->required()
                ->minLength(3)
                ->url()
                
                ->placeholder('https://www.instagram.com/marketingmix_pl/'),

               
        ];
    }
}

