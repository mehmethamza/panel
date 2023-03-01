<?php
//
//namespace App\Models;
//
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;
//use Spatie\Image\Manipulations;
//
//use Spatie\MediaLibrary\HasMedia;
//use Spatie\MediaLibrary\InteractsWithMedia;
//use Spatie\MediaLibrary\MediaCollections\Models\Media;
//use Spatie\Translatable\HasTranslations;
//
//class Blog extends Model implements HasMedia, LocalizedUrlRoutable
//{
//    public function slugs()
//    {
//        return $this->hasMany(BlogSlug::class);
//    }
//
//    protected $guarded = [];
//    use InteractsWithMedia;
//    use HasTranslations;
//
//    public $translatable = ["name", "slug"];
//
//
//    public function getLocalizedRouteKey($locale)
//    {
//        return $this->slugs('locale', '=', $locale)->first()->slug;
//    }
//
//    /**
//     * @param $slug
//     * @return Model|never|null
//     */
//    public function resolveRouteBinding($value, $field = NULL)
//    {
//        return static::whereHas('slugs', function ($q) use ($value) {
//            $q->where('slug', '=', $value);
//        })->first() ?? abort(404);
//    }
//}
//
//
//


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;
use Spatie\Image\Manipulations;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Blog extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasTranslations;

    protected $guarded = [];
    public $translatable = ["name", "slug"];


    /**
     * @param $slug
     * @return Model|never|null
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function resolveRouteBindingQuery($query, $value, $field = null)
    {
        $field = $field ?? $this->getRouteKeyName();

        return $query->where("{$field}->{$this->getLocale()}", $value);
    }

    public function get_urls()
    {
        $links = [];
        foreach (LaravelLocalization::getSupportedLanguagesKeys() as $lang) {
            $link = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getURLFromRouteNameTranslated($lang, "routes." . request()->route()->getName(), [Str::camel(class_basename($this)) => $this->getTranslation('slug', $lang)]);
            $links[$lang] = $link ;
        }
        return $links;
    }
}
