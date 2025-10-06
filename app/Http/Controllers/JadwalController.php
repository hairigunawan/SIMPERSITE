<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Tampilkan daftar semua jadwal
     */
    public function index()
    {
        // Mengambil data jadwal dengan pagination biar tampilannya rapi di grid
        $jadwals = Jadwal::paginate(8);
        return view('admin.jadwal.index', compact('jadwals'));
    }

    /**
     * Tampilkan form tambah jadwal
     */
    public function create()
    {
        return view('admin.jadwal.create');
    }

    /**
     * Simpan data jadwal baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|string|max:50',
            'nama_kelas' => 'required|string|max:100',
            'kelas_mahasiswa' => 'required|string|max:100',
            'sebaran_mahasiswa' => 'required|integer',
            'hari' => 'required|string|max:20',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'ruangan' => 'required|string|max:100',
            'daya_tampung' => 'required|integer',
        ]);

        Jadwal::create($validated);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Tampilkan form edit jadwal
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.edit', compact('jadwal'));
    }

    /**
     * Update data jadwal
     */
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $validated = $request->validate([
            'kode_mk' => 'required|string|max:50',
            'nama_kelas' => 'required|string|max:100',
            'kelas_mahasiswa' => 'required|string|max:100',
            'sebaran_mahasiswa' => 'required|integer',
            'hari' => 'required|string|max:20',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'ruangan' => 'required|string|max:100',
            'daya_tampung' => 'required|integer',
        ]);

        $jadwal->update($validated);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Hapus data jadwal
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
