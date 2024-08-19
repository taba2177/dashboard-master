<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Image\Manipulations;
use Spatie\Image\Enums\Fit;

class Page extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    public $guarded=['id','created_at','updated_at'];
    public $appends=['url'];
    public function getUrlAttribute(){
        return route('page.show',$this);
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public function user(){
        return $this->belongsTo(\App\Models\User::class);
    }
    public function image($type="original"){
        if($this->image==null)
            return env('DEFAULT_IMAGE');
        else{
            dd(env("STORAGE_URL").'/'.\MainHelper::get_conversion($this->image,$type));
            return env("STORAGE_URL").'/'.\MainHelper::get_conversion($this->image,$type);}
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('tiny')
            ->fit(Fit::Max, 120, 120)
            ->width(120)
            ->format('webp')
            ->nonQueued();

        $this
            ->addMediaConversion('thumb')
            ->fit(Fit::Max, 350, 1000)
            ->width(350)
            ->format('webp')
            ->nonQueued();

        $this
            ->addMediaConversion('original')
            ->fit(Fit::Max, 1200, 10000)
            ->width(1200)
            ->format('webp')
            ->nonQueued();

    }
}
