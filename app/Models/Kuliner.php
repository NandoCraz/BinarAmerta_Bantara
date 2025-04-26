<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    protected $guarded = ['id'];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
}
