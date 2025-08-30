<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingMaterial extends Model
{
    protected $fillable = [
        'section_id',
        'order',
        'title',
        'content',
        'embed_youtube_video',
    ];

    public function trainingSection() {
        return $this->belongsTo(TrainingSection::class, 'section_id');
}
}