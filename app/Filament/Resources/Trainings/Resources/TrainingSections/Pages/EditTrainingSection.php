<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingSections\Pages;

use App\Filament\Resources\Trainings\Resources\TrainingSections\TrainingSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrainingSection extends EditRecord
{
    protected static string $resource = TrainingSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
