<?php

namespace App\Filament\Resources\Trainings\Pages;

use App\Filament\Resources\Trainings\Resources\TrainingSections\TrainingSectionResource;
use App\Filament\Resources\Trainings\TrainingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables\Table;

class ManajemenBabPelatihan extends ManageRelatedRecords
{
    protected static string $resource = TrainingResource::class;

    protected static string $relationship = 'trainingSections';

    protected static ?string $relatedResource = TrainingSectionResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
