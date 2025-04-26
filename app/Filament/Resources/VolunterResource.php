<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VolunterResource\Pages;
use App\Filament\Resources\VolunterResource\RelationManagers;
use App\Models\Kota;
use App\Models\Volunter;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
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

class VolunterResource extends Resource
{
    protected static ?string $model = Volunter::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Volunter';
    protected static ?string $label = 'Volunter';
    protected static ?string $navigationGroup = 'Event';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kota_id')
                    ->label('Kota')
                    ->options(Kota::all()->pluck('nama_kota', 'id'))
                    ->required()
                    ->searchable(),
                TextInput::make('nama_acara')
                    ->label('Nama Acara')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan Nama Acara'),
                TextInput::make('lokasi')
                    ->label('Alamat Lokasi Acara')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan Alamat Lokasi Acara'),
                DatePicker::make('tanggal')
                    ->label('Tanggal Acara')
                    ->required(),
                TextInput::make('longitude')
                    ->label('Longitude')
                    ->required()
                    ->maxLength(255),
                TextInput::make('latitude')
                    ->label('Latitude')
                    ->required()
                    ->maxLength(255),
                TextInput::make('harga')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp.'),
                TextInput::make('kuota')
                    ->label('Kuota Volunter')
                    ->required()
                    ->numeric()
                    ->prefixIcon('heroicon-o-user-group'),
                TextInput::make('link_maps')
                    ->label('Link Maps')
                    ->required()
                    ->url()
                    ->maxLength(255)
                    ->placeholder('Masukkan Link Maps'),
                RichEditor::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                FileUpload::make('banner')
                    ->label('Banner Acara')
                    ->required()
                    ->image()
                    ->imageEditor()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kota.nama_kota')
                    ->label('Kota')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nama_acara')
                    ->label('Nama Acara')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('lokasi')
                    ->label('Lokasi Acara')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal Acara')
                    ->date()
                    ->sortable(),
                TextColumn::make('harga')
                    ->label('Harga')
                    ->sortable()
                    ->money('IDR'),
                TextColumn::make('kuota')
                    ->label('Kuota Pendaftar')
                    ->getStateUsing(fn($record) => $record->pendaftar->count() . '/' . $record->kuota),
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
            'index' => Pages\ListVolunters::route('/'),
            'create' => Pages\CreateVolunter::route('/create'),
            'edit' => Pages\EditVolunter::route('/{record}/edit'),
        ];
    }
}
