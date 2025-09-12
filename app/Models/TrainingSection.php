<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TrainingSection extends Model
{
    protected $fillable = [
        'slug',
        'training_id',
        'order',
        'title',
        'description',
    ];

    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title . '-' . $model->id);
            $model->order = TrainingSection::where('training_id', $model->training_id)->max('order') + 1;
        });
    }

    public function trainingMaterials() {
        return $this->hasMany(TrainingMaterial::class, 'section_id')->orderBy('order');
    }

    public function training() {
        return $this->belongsTo(Training::class);
    }


}
