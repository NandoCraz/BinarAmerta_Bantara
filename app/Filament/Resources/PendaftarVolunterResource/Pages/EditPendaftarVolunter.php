<?php

namespace App\Filament\Resources\PendaftarVolunterResource\Pages;

use App\Filament\Resources\PendaftarVolunterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendaftarVolunter extends EditRecord
{
    protected static string $resource = PendaftarVolunterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
