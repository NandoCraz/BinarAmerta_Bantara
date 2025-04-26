<?php

namespace App\Imports;

use App\Models\Kota;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;

class KotaImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Kota::create([
                'provinsi_id' => $row['provinsi_id'],
                'nama_kota' => $row['nama_kota'],
            ]);
        }
    }
}
