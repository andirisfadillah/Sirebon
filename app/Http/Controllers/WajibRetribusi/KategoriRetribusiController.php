<?php

namespace App\Http\Controllers\WajibRetribusi;

use App\Http\Controllers\Controller;
use App\Models\RetributionCategory;
use Illuminate\Http\Request;

class KategoriRetribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = RetributionCategory::get();
        return view('Wajib-Retribusi.kategori-retribusi.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Wajib-Retribusi.kategori-retribusi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        RetributionCategory::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('kategori.index');
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
        $kategori = RetributionCategory::find($id);

        return view('Wajib-Retribusi.kategori-retribusi.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = RetributionCategory::find($id);
        // dd($kategori);
        
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = RetributionCategory::find($id);
        
        $kategori->delete();
        return redirect()->route('kategori.index');
    }
}
