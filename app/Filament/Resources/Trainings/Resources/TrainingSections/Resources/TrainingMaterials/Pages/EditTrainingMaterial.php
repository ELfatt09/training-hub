<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials\Pages;

use App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials\TrainingMaterialResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrainingMaterial extends EditRecord
{
    protected static string $resource = TrainingMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
