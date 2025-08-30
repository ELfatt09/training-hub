<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials;

use App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials\Pages\CreateTrainingMaterial;
use App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials\Pages\EditTrainingMaterial;
use App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials\Schemas\TrainingMaterialForm;
use App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials\Tables\TrainingMaterialsTable;
use App\Filament\Resources\Trainings\Resources\TrainingSections\TrainingSectionResource;
use App\Models\TrainingMaterial;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrainingMaterialResource extends Resource
{
    protected static ?string $model = TrainingMaterial::class;


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $parentResource = TrainingSectionResource::class;

    protected static ?string $recordTitleAttribute = 'Materi Pelatihan';

    public static function form(Schema $schema): Schema
    {
        return TrainingMaterialForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrainingMaterialsTable::configure($table);
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
            'create' => CreateTrainingMaterial::route('/create'),
            'edit' => EditTrainingMaterial::route('/{record}/edit'),
        ];
    }
}
