<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingSection extends Model
{
    protected $fillable = [
        'training_id',
        'order',
        'title',
        'description',
    ];

    public function trainingMaterials() {
        return $this->hasMany(TrainingMaterial::class, 'section_id')->orderBy('order');
    }

    public function training() {
        return $this->belongsTo(Training::class);
    }


}
