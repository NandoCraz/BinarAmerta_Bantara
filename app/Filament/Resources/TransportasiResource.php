<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransportasiResource\Pages;
use App\Filament\Resources\TransportasiResource\RelationManagers;
use App\Models\Transportasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransportasiResource extends Resource
{
    protected static ?string $model = Transportasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationLabel = 'Perjalanan Transportasi';
    protected static ?string $label = 'Perjalanan Transportasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Nama Pemesan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tujuan')
                    ->label('Tujuan')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(function ($record) {
                        if ($record->wisata) {
                            return $record->wisata->nama_tempat;
                        } elseif ($record->kuliner) {
                            return $record->kuliner->nama_kuliner;
                        }
                        return '-'; // Kalau dua-duanya null
                    }),
                TextColumn::make('tanggal_berangkat')
                    ->label('Tanggal Berangkat')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jam_berangkat')
                    ->label('Jam Berangkat')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jumlah_orang')
                    ->label('Jumlah Orang')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('total_harga')
                    ->label('Total Harga')
                    ->sortable()
                    ->searchable()
                    ->money('IDR', true),
                TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->searchable()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Belum Lunas' => 'warning', // kuning
                        'Lunas' => 'success',        // hijau
                    })

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTransportasis::route('/'),
            'create' => Pages\CreateTransportasi::route('/create'),
            'edit' => Pages\EditTransportasi::route('/{record}/edit'),
        ];
    }
}
