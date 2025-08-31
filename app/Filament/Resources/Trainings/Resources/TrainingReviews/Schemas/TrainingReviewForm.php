<?php

namespace App\Filament\Resources\Trainings\Resources\TrainingReviews\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Mokhosh\FilamentRating\Components\Rating;

class TrainingReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->title('Buat Review Pelatihan')
            ->components([
                Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->required(),
                Rating::make('rating')
                ->stars(5)->allowZero()->color('primary')->size('lg'),
                TextInput::make('comment')
                    ->label('Comment')
            ]);
    }
}
