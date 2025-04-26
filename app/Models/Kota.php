<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $guarded = ['id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }

    public function kuliner()
    {
        return $this->hasMany(Kuliner::class);
    }

    public function volunter()
    {
        return $this->hasMany(Volunter::class);
    }


}
