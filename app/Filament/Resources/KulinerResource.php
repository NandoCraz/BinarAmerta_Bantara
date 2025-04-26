<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KulinerResource\Pages;
use App\Filament\Resources\KulinerResource\RelationManagers;
use App\Models\Kota;
use App\Models\Kuliner;
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

class KulinerResource extends Resource
{
    protected static ?string $model = Kuliner::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationGroup = 'Lokasi';
    protected static ?string $navigationLabel = 'Tempat Kuliner';
    protected static ?string $label = 'Tempat Kuliner';

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
                    ->label('Nama Tempat Kuliner')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan Nama Tempat Kuliner'),
                TextInput::make('kategori')
                    ->label('Kategori Kuliner')
                    ->required(),
                TextInput::make('jenis_masakan')
                    ->label('Jenis Masakan')
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
                    ->label('Gambar Tempat Kuliner')
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
                    ->label('Nama Tempat Kuliner')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kategori')
                    ->label('Kategori Kuliner')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jenis_masakan')
                    ->label('Jenis Masakan')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListKuliners::route('/'),
            'create' => Pages\CreateKuliner::route('/create'),
            'edit' => Pages\EditKuliner::route('/{record}/edit'),
        ];
    }
}
