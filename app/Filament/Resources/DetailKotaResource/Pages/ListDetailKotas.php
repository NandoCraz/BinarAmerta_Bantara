<?php

namespace App\Filament\Resources\DetailKotaResource\Pages;

use App\Filament\Resources\DetailKotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailKotas extends ListRecords
{
    protected static string $resource = DetailKotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
