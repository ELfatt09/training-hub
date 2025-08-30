<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trainingReview extends Model
{
    protected $fillable = [
        'training_id',
        'user_id',
        'rating',
        'comment',
    ];

    public function training() {
        return $this->belongsTo(Training::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
