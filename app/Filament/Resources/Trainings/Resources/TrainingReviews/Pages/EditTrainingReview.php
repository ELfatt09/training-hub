<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingReviews\Pages;

use App\Filament\Resources\Trainings\Resources\TrainingReviews\TrainingReviewResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrainingReview extends EditRecord
{
    protected static string $resource = TrainingReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
