<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthReport extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan
    protected $table = 'health_reports';

    // Kolom yang bisa diisi
    protected $fillable = [
        'patient_name',
        'age',
        'checkup_date',
        'status'
    ];
}
