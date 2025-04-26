<?php

namespace App\Filament\Resources\ProdukLokalResource\Pages;

use App\Filament\Resources\ProdukLokalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProdukLokal extends EditRecord
{
    protected static string $resource = ProdukLokalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
