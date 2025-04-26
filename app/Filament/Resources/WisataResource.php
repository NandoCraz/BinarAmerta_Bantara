<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WisataResource\Pages;
use App\Filament\Resources\WisataResource\RelationManagers;
use App\Models\Kota;
use App\Models\Wisata;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WisataResource extends Resource
{
    protected static ?string $model = Wisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';
    protected static ?string $navigationGroup = 'Lokasi';
    protected static ?string $navigationLabel = 'Tempat Wisata';
    protected static ?string $label = 'Tempat Wisata';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kota_id')
                    ->label('Kota')
                    ->options(Kota::all()->pluck('nama_kota', 'id'))
                    ->required()
                    ->searchable(),
                TextInput::make('nama_tempat')
                    ->label('Nama Wisata')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan Nama Wisata'),
                TextInput::make('harga')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp.'),
                TextInput::make('rating')
                    ->label('Rating')
                    ->numeric()
                    ->required(),
                TextInput::make('longitude')
                    ->label('Longitude')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan Longitude'),
                TextInput::make('latitude')
                    ->label('Latitude')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan Latitude'),
                TextInput::make('link_maps')
                    ->label('Link Maps')
                    ->required()
                    ->url()
                    ->maxLength(255)
                    ->placeholder('Masukkan Link Maps'),
                TextInput::make('link_video')
                    ->label('Link Video')
                    ->required()
                    ->maxLength(255)
                    ->url()
                    ->placeholder('Masukkan Link Video'),
                RichEditor::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                FileUpload::make('gambar_tempat')
                    ->label('Gambar Tempat Wisata')
                    ->image()
                    ->imageEditor()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar_tempat')
                    ->url(fn($record) => url('storage/' . $record->gambar_tempat)),
                TextColumn::make('kota.nama_kota')
                    ->label('Kota')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nama_tempat')
                    ->label('Nama Wisata')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('harga')
                    ->label('Harga')
                    ->sortable()
                    ->money('IDR'),
                TextColumn::make('rating')
                    ->label('Rating')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListWisatas::route('/'),
            'create' => Pages\CreateWisata::route('/create'),
            'edit' => Pages\EditWisata::route('/{record}/edit'),
        ];
    }
}
