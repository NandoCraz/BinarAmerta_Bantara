<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukLokalResource\Pages;
use App\Filament\Resources\ProdukLokalResource\RelationManagers;
use App\Models\Kota;
use App\Models\ProdukLokal;
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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;

class ProdukLokalResource extends Resource
{
    protected static ?string $model = ProdukLokal::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $navigationLabel = 'Produk Lokal';
    protected static ?string $label = 'Produk Lokal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kota_filter') // ini hanya buat bantu filter, tidak disimpan ke DB
                    ->label('Kota')
                    ->options(Kota::all()->pluck('nama_kota', 'id'))
                    ->searchable()
                    ->reactive(),

                Select::make('wisata_id')
                    ->label('Produk Wisata')
                    ->options(function (callable $get, ?ProdukLokal $record) {
                        $kotaId = $get('kota_filter') ?? $record?->wisata?->kota_id;

                        if (!$kotaId) {
                            return [];
                        }

                        return Wisata::where('kota_id', $kotaId)->pluck('nama_tempat', 'id')->toArray();
                    })
                    ->required()
                    ->searchable()
                    ->reactive()
                    ->disabled(fn(callable $get, ?ProdukLokal $record) => !$get('kota_filter') && !$record),
                TextInput::make('nama_produk')
                    ->label('Nama Produk')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan Nama Produk'),
                Select::make('kategori')
                    ->options([
                        'Pakaian' => 'Pakaian',
                        'Makanan' => 'Makanan',
                        'Barang' => 'Barang',
                    ])
                    ->label('Kategori')
                    ->required()
                    ->searchable()
                    ->placeholder('Pilih Kategori'),
                TextInput::make('stok')
                    ->label('Stok')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->placeholder('Masukkan Stok'),
                TextInput::make('harga')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp.'),
                RichEditor::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                FileUpload::make('gambar')
                    ->label('Gambar Produk')
                    ->image()
                    ->imageEditor()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('wisata.nama_tempat')
                    ->label('Nama Wisata')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nama_produk')
                    ->label('Nama Produk')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('stok')
                    ->label('Stok')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('harga')
                    ->label('Harga')
                    ->sortable()
                    ->searchable()
                    ->money('IDR', true),
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
            'index' => Pages\ListProdukLokals::route('/'),
            'create' => Pages\CreateProdukLokal::route('/create'),
            'edit' => Pages\EditProdukLokal::route('/{record}/edit'),
        ];
    }
}
