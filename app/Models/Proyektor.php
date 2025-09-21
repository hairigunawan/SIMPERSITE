<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyektor extends Model
{
    protected $table = "proyektors";
    protected $fillable = [
        'kode_proyektor',
        'nama_sarpras',
        'merk',
        'status',
        'gambar'
    ];
}
