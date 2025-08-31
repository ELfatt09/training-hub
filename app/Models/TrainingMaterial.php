<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TrainingMaterial extends Model
{
    protected $fillable = [
        'section_id',
        'order',
        'title',
        'slug',
        'content',
        'embed_youtube_video',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title . '-' . $model->id);
        });
    }

    public function trainingSection() {
        return $this->belongsTo(TrainingSection::class, 'section_id');
}
}