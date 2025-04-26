<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $guarded = ['id'];

    public function kota()
    {
        return $this->hasMany(Kota::class);
    }
}
