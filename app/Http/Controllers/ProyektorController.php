<?php

namespace App\Http\Controllers;

use App\Models\Proyektor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProyektorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyektors = Proyektor::latest()->paginate(10);
        return view('proyektor.index', compact('proyektors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyektor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_proyektor' => 'required|unique:proyektors|max:10',
            'nama_sarpras' => 'required|max:50',
            'merk' => 'required|max:50',
            'status' => 'required|in:tersedia,dipinjam,rusak',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('proyektor.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $path = 'images/default.png';
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
            // get only filename
            $path = str_replace('public/', '', $path);
        }

        Proyektor::create([
            'kode_proyektor' => $request->kode_proyektor,
            'nama_sarpras' => $request->nama_sarpras,
            'merk' => $request->merk,
            'status' => $request->status,
            'gambar' => $path
        ]);

        return redirect()->route('proyektor.index')
                         ->with('success', 'proyektor berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyektor $proyektor)
    {
        return view('proyektor.show', compact('proyektor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyektor $proyektor)
    {
        return view('proyektor.edite', compact('proyektor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyektor $proyektor)
    {
        $validator = Validator::make($request->all(), [
            'kode_proyektor' => 'required|unique:proyektors|max:10',
            'nama_sarpras' => 'required|max:50',
            'merk' => 'required|max:50',
            'status' => 'required|in:tersedia,dipinjam,rusak',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('proyektor.edit', $proyektor->id)
                        ->withErrors($validator)
                        ->withInput();
        }

        $proyektor->update($request->all());

        return redirect()->route('proyektor.index')
                         ->with('success', 'Proyektor berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyektor $proyektor)
    {
        $proyektor->delete();

        return redirect()->route('proyektor.index')
                         ->with('success', 'Proyektor berhasil dihapus.');
    }
}
