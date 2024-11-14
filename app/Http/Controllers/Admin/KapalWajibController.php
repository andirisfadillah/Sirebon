<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kapal;
use Illuminate\Http\Request;

class KapalWajibController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kapal = kapal::all();
        return view('Admin.kapal', compact('kapal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Kapal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required|string|max:50',
            'nama_kapal' => 'required|string|max:50',
            'jenis_kapal' => 'required|string|max:50',
            'ukuran' => 'required|string|max:50',

        ]);
        kapal::create([
            'id_user' => auth()->id(),
            'nama_pemilik' => $request->nama_pemilik, // Pastikan ini ada
            'nama_kapal' => $request->nama_kapal,
            'jenis_kapal' => $request->jenis_kapal,
            'ukuran' => $request->ukuran,
        ]);
        
        return redirect()->route('kapal.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
            $kapal = kapal::findOrFail($id); // Ambil data kapal berdasarkan ID
            return view('Admin.Kapal.edit', compact('kapal'));
    
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pemilik' => 'required|string|max:50',
            'nama_kapal' => 'required|string|max:50',
            'jenis_kapal' => 'required|string|max:50',
            'ukuran' => 'required|string|max:50',
        ]);

        $kapal = kapal::findOrFail($id);

        $kapal->update($request->all());

        return redirect()->route('kapal.index')->with('succes', 'Data rekening berhasil di perbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = kapal::findOrFail($id);
        $data->delete();

        return redirect()->route('kapal.index')->with('succes', 'Data berhasil dihapus.');
    }
}
