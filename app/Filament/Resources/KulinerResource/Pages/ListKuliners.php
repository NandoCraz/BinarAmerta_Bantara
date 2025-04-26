<?php

namespace App\Filament\Resources\KulinerResource\Pages;

use App\Filament\Resources\KulinerResource;
use App\Imports\KulinerImport;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use EightyNine\ExcelImport\ExcelImportAction;

class ListKuliners extends ListRecords
{
    protected static string $resource = KulinerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExcelImportAction::make()
                ->color('success')
                ->use(KulinerImport::class),
        ];
    }
}
