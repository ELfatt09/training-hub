<?php

namespace App\Filament\Resources\LowonganMagangs\Pages;

use App\Filament\Resources\LowonganMagangs\LowonganMagangResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLowonganMagang extends EditRecord
{
    protected static string $resource = LowonganMagangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
