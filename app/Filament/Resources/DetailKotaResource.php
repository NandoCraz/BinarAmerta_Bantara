<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailKotaResource\Pages;
use App\Filament\Resources\DetailKotaResource\RelationManagers;
use App\Models\DetailKota;
use App\Models\Kota;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailKotaResource extends Resource
{
    protected static ?string $model = DetailKota::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    protected static ?string $navigationLabel = 'Detail Kota';
    protected static ?string $label = 'Detail Kota';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kota_id')
                    ->label('Kota')
                    ->options(Kota::all()->pluck('nama_kota', 'id'))
                    ->required()
                    ->searchable(),
                RichEditor::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                RichEditor::make('fun_fact')
                    ->label('Fun Fact')
                    ->required(),
                RichEditor::make('waktu_terbaik_berlibur')
                    ->label('Waktu Terbaik Berlibur')
                    ->required(),
                RichEditor::make('festival')
                    ->label('Festival')
                    ->required(),
                RichEditor::make('fakta_penting')
                    ->label('Fakta Penting')
                    ->required(),
                RichEditor::make('produk_umkm')
                    ->label('Produk UMKM')
                    ->required(),
                RichEditor::make('destinasi_wisata')
                    ->label('Destinasi Wisata')
                    ->required(),
                TextInput::make('sentimen_positif')
                    ->label('Sentimen Positif')
                    ->required()
                    ->numeric(),
                TextInput::make('sentimen_negatif')
                    ->label('Sentimen Negatif')
                    ->required()
                    ->numeric(),
                TextInput::make('sentimen_netral')
                    ->label('Sentimen Netral')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kota.nama_kota')->label('Nama Kota'),
                TextColumn::make('sentimen_positif')->label('Sentimen Positif'),
                TextColumn::make('sentimen_negatif')->label('Sentimen Negatif'),
                TextColumn::make('sentimen_netral')->label('Sentimen Netral'),
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
            'index' => Pages\ListDetailKotas::route('/'),
            'create' => Pages\CreateDetailKota::route('/create'),
            'edit' => Pages\EditDetailKota::route('/{record}/edit'),
        ];
    }
}
