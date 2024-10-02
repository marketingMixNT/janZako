<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;


class Room extends Model
{
    use HasFactory;

    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_desc',
        'title',
        'slug',
        'short_desc',
        'desc',
        'equipment',
        'beds',
        'bathroom',
        'thumbnail',
        'gallery',
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
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'title' => 'array',
        'slug' => 'array',
        'short_desc' => 'array',
        'desc' => 'array',
        'equipment' => 'array',
        'apartment_id' => 'integer',
        'beds' => "array",
        'bathroom' => 'array',
        'gallery' => "array",
    ];

    public function apartment(): BelongsTo
    {
        return $this->belongsTo(Apartment::class);
    }



    public function getMetaTitle(): string
    {
        if ($this->meta_title) {
            return $this->meta_title;
        } else {
            return str_replace(['"', "'"], '', $this->title) . " | Apartamenty Jan";
        }
    }

    public function getMetaDesc(): string
    {
        if ($this->meta_desc) {
            return $this->meta_desc;
        } else {
            return substr(strip_tags($this->desc), 0, 150);
        }
    }

    public $translatable = [
        'meta_title',
        'meta_desc',
        'title',
        'slug',
        'desc',
        'short_desc',
        'equipment',
        'beds',
        'bathroom',
    ];
}
