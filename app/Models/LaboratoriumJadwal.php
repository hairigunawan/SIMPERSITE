<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoriumJadwal extends Model
{
    use HasFactory;

    protected $table = 'laboratorium_jadwal';

    protected $fillable = [
        'nama', 'kelas', 'matkul', 'waktu', 'status'
    ];
}