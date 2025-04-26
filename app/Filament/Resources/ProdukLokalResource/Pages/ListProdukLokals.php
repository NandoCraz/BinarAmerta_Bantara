<?php

namespace App\Filament\Resources\ProdukLokalResource\Pages;

use App\Filament\Resources\ProdukLokalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProdukLokals extends ListRecords
{
    protected static string $resource = ProdukLokalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
