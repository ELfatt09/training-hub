<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingSections\RelationManagers;

use App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials\TrainingMaterialResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class MaterialsRelationManager extends RelationManager
{
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
