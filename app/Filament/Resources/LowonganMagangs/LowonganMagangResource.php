<?php

namespace App\Filament\Resources\LowonganMagangs;

use App\Filament\Resources\LowonganMagangs\Pages\CreateLowonganMagang;
use App\Filament\Resources\LowonganMagangs\Pages\EditLowonganMagang;
use App\Filament\Resources\LowonganMagangs\Pages\ListLowonganMagangs;
use App\Filament\Resources\LowonganMagangs\Schemas\LowonganMagangForm;
use App\Filament\Resources\LowonganMagangs\Tables\LowonganMagangsTable;
use App\Models\LowonganMagang;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LowonganMagangResource extends Resource
{
    protected static ?string $model = LowonganMagang::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Lowongan Magang';

    public static function form(Schema $schema): Schema
    {
        return LowonganMagangForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LowonganMagangsTable::configure($table);
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
            'index' => ListLowonganMagangs::route('/'),
            'create' => CreateLowonganMagang::route('/create'),
            'edit' => EditLowonganMagang::route('/{record}/edit'),
        ];
    }
}
