<?php

namespace App\Filament\Resources\TransportasiResource\Pages;

use App\Filament\Resources\TransportasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransportasis extends ListRecords
{
    protected static string $resource = TransportasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
