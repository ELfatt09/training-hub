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
            $model->order = TrainingMaterial::where('section_id', $model->section_id)->max('order') + 1;
        });
    }

    public function getEmbedUrlAttribute()
{
    // Example: https://www.youtube.com/watch?v=dQw4w9WgXcQ
    // Convert to: https://www.youtube.com/embed/dQw4w9WgXcQ
    return preg_replace(
        "/watch\?v=([^\&\?\/]+)/",
        "embed/$1",
        $this->embed_youtube_video
    );
}

    public function trainingSection() {
        return $this->belongsTo(TrainingSection::class, 'section_id');
}
}