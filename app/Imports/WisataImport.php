<?php

namespace App\Imports;

use App\Models\Wisata;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;

class WisataImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Wisata::create([
                'kota_id' => $row['city'],
                'nama_tempat' => $row['place_name'],
                'deskripsi' => $row['description'],
                'harga' => $row['price'],
                'rating' => $row['rating'],
                'link_maps' => $row['link_maps'],
                'link_video' => $row['link_video'],
                'latitude' => $row['latitude'],
                'longitude' => $row['longitude'],
                'gambar_tempat' => $row['gambar_tempat'] ?? '3FnnjABNUgUxOjCarDEXCwm2ZhpFV73tUIsseug5.png',
            ]);
        }
    }
}
