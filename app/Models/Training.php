<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrainingSection;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Training extends Model
{
    protected $fillable = [
        'title',
        'banner',
        'major_id',
        'slug',
        'description',
        'type',
        'have_certificate',
    ];

    // Accessor for material count
    public function getMaterialCountAttribute()
    {
        // Assuming each TrainingSection has a traningMaterials() relationship
        return $this->trainingSections->sum(function ($section) {
            return $section->trainingMaterials ? $section->trainingMaterials->count() : 0;
        });
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title . '-' . $model->id);
        });
    }

    public function major() {
        return $this->belongsTo(Major::class);
    }

    public function trainingSections() {
        return $this->hasMany(TrainingSection::class)->orderBy('order');
    }

        public function trainingReviews() {
        return $this->hasMany(TrainingReview::class);
    }

}
