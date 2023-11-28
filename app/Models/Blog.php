<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'title',
        'description',
        'image',
        'slug',
        'user_id'
    ];

    //belongto
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::saving(function ($model) {
            $oldPath = $model->getOriginal('image');

            if ($model->hasMedia('image') && $oldPath) {
                // Perform actions before storing the file, e.g., deleting the old file
                \Storage::disk('public/blog')->delete($oldPath);
            }
        });
    }
}
