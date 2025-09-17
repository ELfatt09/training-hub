<?php

namespace App\Filament\Resources\LowonganMagangs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LowonganMagangsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('banner')
                    ->searchable(),
                TextColumn::make('company_name')
                    ->searchable(),
                TextColumn::make('company_logo')
                    ->searchable(),
                TextColumn::make('residence')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('type'),
                TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('minimum_salary')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('maximum_salary')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('whatsapp_number')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
