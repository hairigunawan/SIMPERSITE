<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        // Statistik dummy
        $ruangan = [
            'tersedia' => 5,
            'terpakai' => 2,
            'perbaikan' => 1,
        ];

        $proyektor = [
            'tersedia' => 3,
            'terpakai' => 1,
            'perbaikan' => 1,
        ];

        // Data dummy daftar peminjaman aktif
        $peminjamanAktif = [
            (object)[
                'nama' => 'Budi Santoso',
                'jenis' => 'ruangan',
                'keperluan' => 'Rapat Dosen',
                'tgl_pinjam' => '2025-10-04',
                'tgl_kembali' => '2025-10-04',
                'jam_mulai' => '08:00',
                'jam_selesai' => '10:00',
                'status' => 'disetujui',
            ],
            (object)[
                'nama' => 'Siti Rahmawati',
                'jenis' => 'proyektor',
                'keperluan' => 'Presentasi Kelas TI-2B',
                'tgl_pinjam' => '2025-10-05',
                'tgl_kembali' => '2025-10-05',
                'jam_mulai' => '09:00',
                'jam_selesai' => '11:00',
                'status' => 'pending',
            ],
            (object)[
                'nama' => 'Agus Pratama',
                'jenis' => 'ruangan',
                'keperluan' => 'Pelatihan Asisten Dosen',
                'tgl_pinjam' => '2025-10-06',
                'tgl_kembali' => '2025-10-06',
                'jam_mulai' => '13:00',
                'jam_selesai' => '15:00',
                'status' => 'ditolak',
            ],
        ];

        // Hitung total hanya yang disetujui atau pending (belum ditolak)
        $totalRuangan = collect($peminjamanAktif)
            ->where('jenis', 'ruangan')
            ->whereIn('status', ['disetujui', 'pending'])
            ->count();

        $totalProyektor = collect($peminjamanAktif)
            ->where('jenis', 'proyektor')
            ->whereIn('status', ['disetujui', 'pending'])
            ->count();

        return view('peminjaman.index', compact(
            'ruangan',
            'proyektor',
            'peminjamanAktif',
            'totalRuangan',
            'totalProyektor'
        ));
    }

    public function pinjamRuangan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date',
            'keperluan' => 'required',
        ]);

        // Simulasi penyimpanan (belum ke database)
        Peminjaman::create([
            'jenis' => 'ruangan',
            'nama_peminjam' => $request->nama,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'keperluan' => $request->keperluan,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Peminjaman ruangan berhasil diajukan!');
    }

    public function pinjamProyektor(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date',
            'keperluan' => 'required',
        ]);

        // Simulasi penyimpanan (belum ke database)
        Peminjaman::create([
            'jenis' => 'proyektor',
            'nama_peminjam' => $request->nama,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'keperluan' => $request->keperluan,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Peminjaman proyektor berhasil diajukan!');
    }
}
