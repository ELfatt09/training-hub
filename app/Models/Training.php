<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TrainingSection;

class Training extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'have_certificate',
    ];

    public function trainingSections() {
        return $this->hasMany(TrainingSection::class)->orderBy('order');
    }

        public function trainingReviews() {
        return $this->hasMany(TrainingReview::class);
    }
}
