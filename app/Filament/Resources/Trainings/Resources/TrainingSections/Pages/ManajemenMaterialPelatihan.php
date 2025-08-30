<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingSections\Pages;

use App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials\TrainingMaterialResource;
use App\Filament\Resources\Trainings\Resources\TrainingSections\TrainingSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables\Table;

class ManajemenMaterialPelatihan extends ManageRelatedRecords
{
    protected static string $resource = TrainingSectionResource::class;

    protected static string $relationship = 'TrainingMaterials';

    protected static ?string $relatedResource = TrainingMaterialResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
