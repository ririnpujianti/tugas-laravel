<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class,"id_pengguna");//dimiliki
    }
}
