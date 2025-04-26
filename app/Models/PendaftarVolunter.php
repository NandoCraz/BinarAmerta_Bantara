<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftarVolunter extends Model
{
    protected $guarded = ['id'];

    public function volunter()
    {
        return $this->hasMany(Volunter::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
