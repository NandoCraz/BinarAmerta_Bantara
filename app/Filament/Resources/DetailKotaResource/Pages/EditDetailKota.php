<?php

namespace App\Filament\Resources\DetailKotaResource\Pages;

use App\Filament\Resources\DetailKotaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailKota extends EditRecord
{
    protected static string $resource = DetailKotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
