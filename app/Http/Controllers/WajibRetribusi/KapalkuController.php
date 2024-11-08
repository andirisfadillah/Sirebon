<?php

namespace App\Http\Controllers\WajibRetribusi;

use App\Http\Controllers\Controller;
use App\Models\Kapalku;
use Illuminate\Http\Request;

class KapalkuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $kapalku = Kapalku::get();
        return view('Wajib-Retribusi.kapalku', compact('kapalku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Wajib-Retribusi.kapalku-retribusi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
        ]);

        Kapalku::create(
            $request->all()
        );

        return redirect()->route('wajib-retribusi.index');
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
        $kapalku = Kapalku::find($id);

        return view('Wajib-Retribusi.kapalku-retribusi.edit', compact('kapalku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        // dd($kapalku);

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
        ]);
        Kapalku::findOrFail($id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'telepon' => $request->telepon,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'kelurahan' => $request->id_kelurahan
        ]);

        return redirect()->route('Wajib-Retribusi.kapalku-retribusi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kapalku = Kapalku::findOrFail($id);

        $kapalku->delete();
        return redirect()->route('wajib-retribusi.index');
    }
}
