<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrainingSection;
use Illuminate\Support\Str;

class Training extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',
        'have_certificate',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title . '-' . $model->id);
        });
    }

    public function trainingSections() {
        return $this->hasMany(TrainingSection::class)->orderBy('order');
    }

        public function trainingReviews() {
        return $this->hasMany(TrainingReview::class);
    }
}
