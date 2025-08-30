<?php

namespace App\Filament\Resources\Trainings;

use App\Filament\Resources\Trainings\Pages\CreateTraining;
use App\Filament\Resources\Trainings\Pages\EditTraining;
use App\Filament\Resources\Trainings\Pages\ListTrainings;
use App\Filament\Resources\Trainings\Pages\ManajemenBabPelatihan;
use App\Filament\Resources\Trainings\Pages\ManajemenReviewPelatihan;
use App\Filament\Resources\Trainings\Schemas\TrainingForm;
use App\Filament\Resources\Trainings\Tables\TrainingsTable;
use App\Models\Training;
use App\Filament\Resources\Trainings\RelationManagers\SectionsRelationManager;
use App\Filament\Resources\Trainings\RelationManagers\TrainingReviewsRelationManager;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrainingResource extends Resource
{
    protected static ?string $model = Training::class;



    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Pelatihan';

    public static function form(Schema $schema): Schema
    {
        return TrainingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrainingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            'trainingSections' => SectionsRelationManager::class,
            'trainingReviews' => TrainingReviewsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTrainings::route('/'),
            'create' => CreateTraining::route('/create'),
            'edit' => EditTraining::route('/{record}/edit'),
            'manajemen bab' => ManajemenBabPelatihan::route('/{record}/sections'),
            'manajemen review' => ManajemenReviewPelatihan::route('/{record}/reviews'),
        ];
    }
}
