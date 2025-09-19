<?php

namespace App\Filament\Resources\LowonganMagangs\Pages;

use App\Filament\Resources\LowonganMagangs\LowonganMagangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLowonganMagangs extends ListRecords
{
    protected static string $resource = LowonganMagangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
