<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Event extends Model implements HasMedia
{
    use HasFactory, HasTranslations, SoftDeletes, InteractsWithMedia;

    protected $fillable = ['status'];
    public $translatable = ['title','description','location'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function create_user()
    {
        return $this->belongsTo(User::class);
    }

    public function update_user()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order()
    {
        return $this->belongsTo(EventOrder::class,'event_id','id');
    }

    public function ordernumber()
    {
        return $this->hasMany(Order::class,'order_number','id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'event_tag');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }


    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('images','image')
            ?  $this->getFirstMediaUrl('images','image')
            : asset('website/event.jpg');
    }

    public function scopeStatus($query,$arg)
    {
        return $query->where('status',$arg);
    }
}
