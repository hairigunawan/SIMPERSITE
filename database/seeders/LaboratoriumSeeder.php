<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaboratoriumSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laboratorium')->insert([
            [
                'nama'   => 'Steve Jobs',
                'lokasi' => 'GTI Lt 3',
                'kelas'  => 'TI-3B',
                'matkul' => 'Integrasi Sistem',
                'waktu'  => '08.00 - 12.10',
                'status' => 'Terpakai',
            ],
            [
                'nama'   => 'Lab A',
                'lokasi' => 'Gedung Adriansyah Lt dasar',
                'kelas'  => 'TI-1A',
                'matkul' => 'Desain Grafis',
                'waktu'  => '08.00 - 12.10',
                'status' => 'Terpakai',
            ],
            [
                'nama'   => 'Lab C++',
                'lokasi' => 'Gedung Adriansyah 2 Lt 1',
                'kelas'  => 'TI-2C',
                'matkul' => 'Kewarganegaraan',
                'waktu'  => '13.00 - 14.40',
                'status' => 'Terpakai',
            ],
        ]);
    }
}
