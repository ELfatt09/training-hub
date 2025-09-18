<?php

namespace App\Filament\Resources\LowonganMagangs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class LowonganMagangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

    Section::make('Informasi Lowongan')
        ->description('Detail utama dari lowongan magang/kerja.')
        ->schema([
            TextInput::make('title')
                ->label('Judul Lowongan')
                ->placeholder('Masukkan judul lowongan')
                ->required()
                ->maxLength(150),

        ])
        ->columns(1),

    Section::make('Detail Pekerjaan')
        ->schema([
            FileUpload::make('banner')
                ->label('banner')
                ->image()
                ->required()
                ->visibility('public')
                ->disk('public')
                ->directory('lowongan-magang/banners/'),
            RichEditor::make('description')
                ->label('Deskripsi')
                ->toolbarButtons([
                    'bold',
                    'italic',
                    'h2',
                    'h3',
                    'bulletList',
                    'orderedList',
                    'link',
                    'blockquote',
                    'undo',
                    'redo',
                ])
                ->required()
                ->columnSpanFull(),

            Select::make('type')
                ->label('Tipe Pekerjaan')
                ->options([
                    'full-time' => 'Full Time',
                    'part-time' => 'Part Time',

                ])
                ->default('full-time')
                ->required(),

            DatePicker::make('start_date')
                ->label('Tanggal Mulai')
                ->required()
                ->displayFormat('d M Y'),

            Grid::make(2)->schema([
                TextInput::make('minimum_salary')
                    ->label('Gaji Minimum')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                TextInput::make('maximum_salary')
                    ->label('Gaji Maksimum')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),
            ]),
        ]),

    Section::make('Perusahaan')
        ->schema([
            TextInput::make('company_name')
                ->label('Nama Perusahaan')
                ->placeholder('Contoh: PT Maju Mundur')
                ->required(),

            FileUpload::make('company_logo')
                ->label('Logo Perusahaan')
                ->image()
                ->disk('public')
                ->visibility('public')
                ->directory('lowongan-magangs/company-logos/')
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('1:1')
                ->maxSize(1024)
                ->helperText('Upload logo perusahaan (maks 1MB).'),

            TextInput::make('residence')
                ->label('Domisili')
                ->placeholder('Contoh: Jakarta Selatan')
                ->required(),

            TextInput::make('location')
                ->label('Lokasi Kerja')
                ->placeholder('On-site / Remote / Hybrid')
                ->required(),
        ])
        ->columns(2),

    Section::make('Kontak')
        ->schema([
            TextInput::make('whatsapp_number')
                ->label('Nomor WhatsApp')
                ->placeholder('6281234567890')
                ->tel()
                ->required()
                ->rule('regex:/^62[0-9]{9,13}$/')
                ->helperText('Gunakan format: 628xxxx (tanpa +).'),
        ]),
]);
    }
}
