<?php

namespace App\Imports;

use App\Models\Kuliner;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;

class KulinerImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Kuliner::create([
                'kota_id' => $row['kota_id'],
                'nama_tempat' => $row['nama_tempat'],
                'deskripsi' => $row['deskripsi'],
                'kategori' => $row['kategori'],
                'jenis_masakan' => $row['jenis_masakan'],
                'link_maps' => $row['link_maps'],
                'link_video' => $row['link_video'],
                'latitude' => $row['latitude'],
                'longitude' => $row['longitute'],
                'gambar_tempat' => '3FnnjABNUgUxOjCarDEXCwm2ZhpFV73tUIsseug5.png',
            ]);
        }
    }
}
