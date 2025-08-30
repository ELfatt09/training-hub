<?php

namespace App\Filament\Resources\Trainings\RelationManagers;

use App\Filament\Resources\Trainings\Resources\TrainingReviews\TrainingReviewResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class TrainingReviewsRelationManager extends RelationManager
{
    protected static string $relationship = 'trainingReviews';

    protected static ?string $relatedResource = TrainingReviewResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
