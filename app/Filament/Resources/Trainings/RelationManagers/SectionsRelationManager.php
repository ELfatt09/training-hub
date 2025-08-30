<?php

namespace App\Filament\Resources\Trainings\RelationManagers;

use App\Filament\Resources\Trainings\Resources\TrainingSections\TrainingSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class SectionsRelationManager extends RelationManager
{
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
