<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingReviews\Schemas;

use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Mokhosh\FilamentRating\Components\Rating;

class TrainingReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->required(),
                Rating::make('rating')
                    ->label('Rating')
                    ->maxValue(5)
                    ->required(),
                Select::make('comment')
                    ->label('Comment')
                    ->textarea()
                    ->rows(4)
                    ->columnSpanFull()
            ]);
    }
}
