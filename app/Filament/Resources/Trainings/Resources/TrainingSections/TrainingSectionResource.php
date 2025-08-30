<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingSections;

use App\Filament\Resources\Trainings\Resources\TrainingSections\Pages\CreateTrainingSection;
use App\Filament\Resources\Trainings\Resources\TrainingSections\Pages\EditTrainingSection;
use App\Filament\Resources\Trainings\Resources\TrainingSections\Pages\ManajemenMaterialPelatihan;
use App\Filament\Resources\Trainings\Resources\TrainingSections\Schemas\TrainingSectionForm;
use App\Filament\Resources\Trainings\Resources\TrainingSections\Tables\TrainingSectionsTable;
use App\Filament\Resources\Trainings\TrainingResource;
use App\Models\TrainingSection;
use App\Filament\Resources\Trainings\Resources\TrainingSections\RelationManagers\MaterialsRelationManager;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrainingSectionResource extends Resource
{
    protected static ?string $model = TrainingSection::class;


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $parentResource = TrainingResource::class;

    protected static ?string $recordTitleAttribute = 'Bab Pelatihan';

    public static function form(Schema $schema): Schema
    {
        return TrainingSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrainingSectionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            'trainingMaterials' => MaterialsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'create' => CreateTrainingSection::route('/create'),
            'edit' => EditTrainingSection::route('/{record}/edit'),
            'manajemen materi' => ManajemenMaterialPelatihan::route('/{record}/materials'),
        ];
    }
}
