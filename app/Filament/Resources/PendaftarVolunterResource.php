<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftarVolunterResource\Pages;
use App\Filament\Resources\PendaftarVolunterResource\RelationManagers;
use App\Models\PendaftarVolunter;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendaftarVolunterResource extends Resource
{
    protected static ?string $model = PendaftarVolunter::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $navigationLabel = 'Pendaftar Volunter';
    protected static ?string $label = 'Pendaftar Volunter';
    protected static ?string $navigationGroup = 'Event';
    protected static ?int $navigationSort = 2;

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
                    ->label('Nama Pendaftar')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('volunter.nama_acara')
                    ->label('Nama Acara')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('volunter.tanggal')
                    ->label('Tanggal Acara')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('volunter.lokasi')
                    ->label('Lokasi Acara')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListPendaftarVolunters::route('/'),
            'create' => Pages\CreatePendaftarVolunter::route('/create'),
            'edit' => Pages\EditPendaftarVolunter::route('/{record}/edit'),
        ];
    }
}
