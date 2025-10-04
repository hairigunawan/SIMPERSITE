<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index()
    {
        $ruangan = [
            'tersedia' => 15,
            'terpakai' => 5,
            'perbaikan' => 1,
        ];

        $proyektor = [
            'tersedia' => 25,
            'terpakai' => 8,
            'perbaikan' => 4,
        ];

        $laboratorium = DB::table('laboratorium')->get();

        return view('beranda', compact('ruangan', 'proyektor', 'laboratorium'));
    }
}
