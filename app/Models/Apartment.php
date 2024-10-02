<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Spatie\Translatable\HasTranslations;


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
        // Meta
        'meta_title',
        'meta_desc',
        'title',
        'slug',

        // Contact Information
        'phone',
        'mail',
        'address',
        'city',

        // Booking Information
        'booking_link',
        'booking_script',

        // Images
        'logo',
        'thumbnail',
        'about_images',
        'banner_rooms',
        'banner_gallery',
        'banner_contact',

        // Descriptions
        'short_desc',
        'about_heading',
        'about_text_first',
        'about_text_second',
        'rooms_heading',
        'rooms_text',

        // Map
        'map',
        'map_link',

        // Reviews
        'google_reviews',
        'google_reviews_average',
        'google_reviews_link',
        'tripadvisor_reviews',
        'tripadvisor_reviews_average',
        'tripadvisor_reviews_link',

        // Slider
        'slider_heading',
        'slider_images',

        // Others
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

        "about_heading" => "array",
        "about_text_first" => "array",
        "about_text_second" => "array",
        'about_images' => 'array',
        "short_desc" => "array",

        'slider_heading' => 'array',
        'slider_images' => 'array',
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

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
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
            return substr(strip_tags($this->short_desc), 0, 150);
        }
    }


    public $translatable = [
        'meta_title',
        'meta_desc',
        'title',
        'slug',
        'short_desc',
        'about_heading',
        'about_text_first',
        'about_text_second',
        'rooms_heading',
        'rooms_text',
        'slider_heading',
    ];
}
