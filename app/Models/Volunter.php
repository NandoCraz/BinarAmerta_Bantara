<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunter extends Model
{
    protected $guarded = ['id'];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function pendaftar()
    {
        return $this->hasMany(PendaftarVolunter::class);
    }
}
