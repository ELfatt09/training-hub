<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingSections\Resources\TrainingMaterials\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TrainingMaterialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                ->label('Judul Materi')
                ->columnSpanFull()
                    ->required(),
                TextInput::make('embed_youtube_video')
                    ->label('Embed Video YouTube')
                    ->url()
                    ->columnSpanFull()
                    ->default(null),
                RichEditor::make('content')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('training-materials')
                    ->fileAttachmentsVisibility('public')
                    ->columnSpanFull()
                    ->required(),

            ]);
    }
}
