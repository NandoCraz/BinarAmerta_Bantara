<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    protected $guarded = ['id'];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'wisata_id');
    }

    public function kuliner()
    {
        return $this->belongsTo(Kuliner::class, 'kuliner_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
