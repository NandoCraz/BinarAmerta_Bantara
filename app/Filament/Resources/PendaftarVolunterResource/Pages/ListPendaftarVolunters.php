<?php

namespace App\Filament\Resources\PendaftarVolunterResource\Pages;

use App\Filament\Resources\PendaftarVolunterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendaftarVolunters extends ListRecords
{
    protected static string $resource = PendaftarVolunterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
