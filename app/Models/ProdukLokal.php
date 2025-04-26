<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukLokal extends Model
{
    protected $guarded = ['id'];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
