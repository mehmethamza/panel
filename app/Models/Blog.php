<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Blog extends Model implements HasMedia
{
    protected $guarded=[];
    use InteractsWithMedia;
//    public function registerMediaConversions(Media $media = null): void
//    {
//        $this->addMediaConversion('crop')
//            ->fit(Manipulations::FIT_CROP, 300, 60)
//            ->performOnCollections('thumb')
//            ->keepOriginalImageFormat();
//
//    }
//
//    public function registerMediaCollections(): void
//    {
//        $this
//            ->addMediaCollection('thumb')
//            ->useFallbackUrl('https://via.placeholder.com/' . (300) . 'x' . (60));
//
//    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
