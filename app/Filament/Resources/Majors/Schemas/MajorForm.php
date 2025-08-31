<?php

namespace App\Filament\Resources\Majors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class MajorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('svg_icon')
                    ->image()
                    ->acceptedFileTypes(['image/svg+xml'])
                    
                    ->required()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('majors')
                    ->maxSize(1024)
                    ->label('SVG Icon (Max: 1MB)'),
               
            ]);
    }
}
