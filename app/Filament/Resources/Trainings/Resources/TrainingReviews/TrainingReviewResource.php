<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingReviews;

use App\Filament\Resources\Trainings\Resources\TrainingReviews\Pages\CreateTrainingReview;
use App\Filament\Resources\Trainings\Resources\TrainingReviews\Pages\EditTrainingReview;
use App\Filament\Resources\Trainings\Resources\TrainingReviews\Schemas\TrainingReviewForm;
use App\Filament\Resources\Trainings\Resources\TrainingReviews\Tables\TrainingReviewsTable;
use App\Filament\Resources\Trainings\TrainingResource;
use App\Models\TrainingReview;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrainingReviewResource extends Resource
{
    protected static ?string $model = TrainingReview::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $parentResource = TrainingResource::class;

    protected static ?string $recordTitleAttribute = 'Review Pelatihan';

    public static function form(Schema $schema): Schema
    {
        return TrainingReviewForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrainingReviewsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'create' => CreateTrainingReview::route('/create'),
            'edit' => EditTrainingReview::route('/{record}/edit'),
        ];
    }
}
