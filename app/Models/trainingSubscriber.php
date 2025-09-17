<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Training;
use App\Models\TrainingSection;
use App\Models\TrainingMaterial;

class trainingSubscriber extends Model
{
    protected $table = 'trainings_subscribers';

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
            ->where('order', '<=', $this->lastSection->order)
            ->get();
    }

    public function completedTrainingMaterials() {
        return TrainingMaterial::where('section_id', $this->lastSection->id)
            ->where('order', '<=', $this->lastMaterial->order)
            ->orWhereIn('section_id', $this->completedTrainingSections()->pluck('id'))
            ->get();
            //
    }

    public function completedTrainingMaterialsCount() {
        return $this->completedTrainingMaterials()->count();
    }

    public function progress() {
        $totalMaterials = $this->training->getMaterialCountAttribute();
        if ($totalMaterials == 0) {
            return 0;
        }

        // Assuming last_material_id indicates the last completed material
        $completedMaterials = $this->completedTrainingMaterialsCount();

        return ($completedMaterials / $totalMaterials) * 100;
    }


}
