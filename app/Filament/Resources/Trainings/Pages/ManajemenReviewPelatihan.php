<?php

namespace App\Filament\Resources\Trainings\Pages;

use App\Filament\Resources\Trainings\Resources\TrainingReviews\TrainingReviewResource;
use App\Filament\Resources\Trainings\TrainingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables\Table;

class ManajemenReviewPelatihan extends ManageRelatedRecords
{
    protected static string $resource = TrainingResource::class;

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
