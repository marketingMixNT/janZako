<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Apartment extends Model
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
        'desc',
        'equipment',
        'thumbnail',
        'gallery',
        'sort',
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
        'desc' => 'array',
        'equipment' => 'array',
        'gallery' => 'array',
    ];

    public $translatable = [
        'meta_title',
        'meta_desc',
        'title',
        'slug',
        'beds',
        'bathroom',
        'short_desc',
        'desc',
        'equipment',
        'reservation_link'
    ];

    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonial::class);
    }
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }

    public function getMetaTitle(): string
    {
        if ($this->meta_title) {
            return $this->meta_title;
        } else {
            return str_replace(['"', "'"], '', $this->title) . " | Hotel Jan Kraków";
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
}
