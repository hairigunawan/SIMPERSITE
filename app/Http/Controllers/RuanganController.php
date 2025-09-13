<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangans = Ruangan::latest()->paginate(10);

        return view('ruangan.index', compact('ruangans'));
    }

    public function create()
    {
        return view('ruangan.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_ruangan' => 'required|unique:ruangans|max:10',
            'nama_ruangan' => 'required|max:50',
            'kapasitas'    => 'required|numeric',
            'lokasi'       => 'required|max:100',
            'gambar'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('ruangan.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $path = 'images/default.png';
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
            // get only filename
            $path = str_replace('public/', '', $path);
        }

        Ruangan::create([
            'kode_ruangan' => $request->kode_ruangan,
            'nama_ruangan' => $request->nama_ruangan,
            'kapasitas'    => $request->kapasitas,
            'lokasi'       => $request->lokasi,
            'gambar'       => $path
        ]);

        return redirect()->route('ruangan.index')
                         ->with('success', 'Ruangan berhasil ditambahkan.');
    }


    public function show(Ruangan $ruangan)
    {
        return view('ruangan.show', compact('ruangan'));
    }


    public function edit(Ruangan $ruangan)
    {
        return view('ruangan.edit', compact('ruangan'));
    }

    public function update(Request $request, Ruangan $ruangan)
    {
        // ... (kode validasi tetap sama) ...

        $path = $ruangan->gambar; // Simpan path lama sebagai default
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika bukan default
            if($ruangan->gambar != 'images/default.png'){
                Storage::disk('public')->delete($ruangan->gambar);
            }

            // Simpan gambar baru dengan cara yang direkomendasikan
            $path = $request->file('gambar')->store('images', 'public');
        }

        $ruangan->update([
            'kode_ruangan' => $request->kode_ruangan,
            'nama_ruangan' => $request->nama_ruangan,
            'kapasitas'    => $request->kapasitas,
            'lokasi'       => $request->lokasi,
            'gambar'       => $path
        ]);

        return redirect()->route('ruangan.index')
                        ->with('success', 'Ruangan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruangan $ruangan)
    {
        // Hapus gambar jika bukan default
        if($ruangan->gambar != 'images/default.png|jpg'){
            Storage::delete('public/'.$ruangan->gambar);
        }

        $ruangan->delete();

        return redirect()->route('ruangan.index')
                         ->with('success', 'Ruangan berhasil dihapus.');
    }
}