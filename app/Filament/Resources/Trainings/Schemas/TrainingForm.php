<?php

namespace App\Filament\Resources\Trainings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class TrainingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('banner')
                
                    ->image()
                    ->maxSize(10240) // Maksimum ukuran file dalam KB (10MB)
                    ->directory('training-banners') // Direktori penyimpanan file
                    ->visibility('public') // Atur visibilitas file
                    ->columnSpanFull(),
                Select::make('major_id')
                    ->label('Major')
                    ->relationship('major', 'title')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Select::make('type')
                    ->options(['online' => 'Online', 'hybrid' => 'Hybrid', 'offline' => 'Offline'])
                    ->default('online')
                    ->required(),
                Toggle::make('have_certificate')
                    ->required(),
            ]);
    }
}
