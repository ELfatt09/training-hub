<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Training;
use App\Models\TrainingSection;
use App\Models\TrainingMaterial;

class trainings_subscriber extends Model
{
    protected $fillable = [
        'user_id',
        'training_id',
        'last_section_id',
        'last_material_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function training() {
        return $this->belongsTo(Training::class);
    }

    public function lastSection() {
        return $this->belongsTo(TrainingSection::class, 'last_section_id');
    }
    public function lastMaterial() {
        return $this->belongsTo(TrainingMaterial::class, 'last_material_id');
    }

    public function completedTrainingSections() {
        return TrainingSection::where('training_id', $this->training_id)
            ->where('order', '<=', TrainingSection::where('training_id', $this->training_id)->max('order'))
            ->get();
    }

    public function completedTrainingMaterials() {
        return TrainingMaterial::where('training_id', $this->training_id)
            ->where('order', '<=', TrainingMaterial::where('training_id', $this->training_id)->max('order'))
            ->get();
    }

    public function progress() {
        $totalMaterials = $this->training->material_count;
        if ($totalMaterials == 0) {
            return 0;
        }

        // Assuming last_material_id indicates the last completed material
        $completedMaterials = TrainingMaterial::where('training_id', $this->training_id)
            ->where('order', '<=', TrainingMaterial::where('training_id', $this->training_id)->max('order'))
            ->count();

        return ($completedMaterials / $totalMaterials) * 100;
    }
}
