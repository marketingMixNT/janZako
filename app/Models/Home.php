<?php

namespace App\Models;

use App\Models\Slide;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Home extends Model
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
        'slider_title',
        'slider_subtitle',
        'slider_images',
        'phone',
        'mail',
        'logo',
        'map',
        'booking_script',
        'booking_link',
        'about_heading',
        'about_text_first',
        'about_text_second',
        'about_images',
        'rooms_heading',
        'rooms_text',
        'testimonials_heading',
        'testimonials_text',
        'slides_id',
        '_id',
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
        'booking_link' => 'array',
        'slider_title' => 'array',
        'slider_subtitle' => 'array',
        'slider_images' => 'array',
        'about_heading' => 'array',
        'about_text_first' => 'array',
        'about_text_second' => 'array',
        'about_images' => 'array',
        'rooms_heading' => 'array',
        'rooms_text' => 'array',
        'testimonials_heading' => 'array',
        'testimonials_text' => 'array',
        'slides_id' => 'integer',
        '_id' => 'integer',
    ];


   


    public $translatable = [
        'meta_title','meta_desc','booking_link','slider_title','slider_subtitle','about_heading','about_text_first','about_text_second','rooms_heading','rooms_text','testimonials_heading','testimonials_text',
     ];
}
