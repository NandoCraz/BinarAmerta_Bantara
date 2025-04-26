<?php

namespace App\Filament\Resources\TransportasiResource\Pages;

use App\Filament\Resources\TransportasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransportasi extends EditRecord
{
    protected static string $resource = TransportasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
