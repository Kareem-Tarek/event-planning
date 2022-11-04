<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Contribution extends Model implements HasMedia
{
    use HasFactory, HasTranslations, SoftDeletes, InteractsWithMedia;

    protected $table = 'contributions';
    protected $fillable = ['status'];
    public $translatable = ['title', 'content'];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);

    }

    public function create_user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function update_user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
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
