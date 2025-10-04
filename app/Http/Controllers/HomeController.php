<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

        // Ambil data laboratorium dari database
        $laboratorium = DB::table('laboratorium')->get();

        return view('dashboard', compact('ruangan', 'proyektor', 'laboratorium'));
    }
}
