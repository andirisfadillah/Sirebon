<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MsRekening;
use App\Models\RefBank;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekening = MsRekening::all();
        return view('Admin.rekening', compact('rekening'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $refBanks = RefBank::all();
        return view('Admin.rekening.create', compact('refBanks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
<<<<<<< HEAD
            'id_ref_bank' => 'required|exists:ref_bank,id',
            'nama_akun' => 'required|string|max:50',
            'no_rekening' => 'required|string|max:50',
=======
            'id_refBank' => 'required|exists:ref_bank,id',
            'nama_akun' => 'required|string:max:50',
            'no_rekening' => 'required|string:max:50',
>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
        ]);

        MsRekening::create($request->all());

<<<<<<< HEAD
        return redirect()->route('rekening.index')->with('success', 'Data rekening berhasil ditambahkan.');
=======
        return redirect()->route('rekening.index')->with('succes', 'Data rekening berhasil ditambahkan.');
>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
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
<<<<<<< HEAD
        // Temukan data rekening berdasarkan ID
        $data = MsRekening::findOrFail($id);

        // Ambil daftar bank dari tabel ref_bank untuk dropdown (jika diperlukan)
        $refBanks = RefBank::all();

        // Kirim data rekening yang ingin diedit dan daftar bank ke view
        return view('Admin.rekening.edit', compact('data', 'refBanks'));

=======
        // Temukan data rekening sesuai id
        $data = MsRekening::findOrFail($id);

        // Ambil daftar bank dari tabel ref_bank untuk dropdown (jika di perlukan)
        $refBanks = RefBank::all();

        // kirim data rekening yang ingin diedit dan daftar bank ke view

        return view('Admin.rekening.edit', compact('data', 'refBanks'));
>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = MsRekening::findOrFail($id);

<<<<<<< HEAD
        // Validasi input
        $request->validate([
            'id_ref_bank' => 'required|exists:ref_bank,id',
=======
        // validasi input
        $request->validate([
            'id_ref_bank' => 'required|exists:ref_bank_id',
>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
            'nama_akun' => 'required|string|max:50',
            'no_rekening' => 'required|string|max:50',
        ]);

<<<<<<< HEAD
        // Update data
=======
        // update data

>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
        $data->update([
            'id_ref_bank' => $request->id_ref_bank,
            'nama_akun' => $request->nama_akun,
            'no_rekening' => $request->no_rekening,
        ]);

<<<<<<< HEAD
        return redirect()->route('rekening.index')->with('success', 'Data rekening berhasil diperbarui.');
=======
        return redirect()->route('rekening.index')->with('succes', 'Data rekening berhasil di perbarui.');
>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = MsRekening::findOrFail($id);
        $data->delete();

<<<<<<< HEAD
        return redirect()->route('rekening.index')->with('success', 'Data berhasil dihapus.');

=======
        return redirect()->route('rekening.index')->with('succes', 'Data berhasil dihapus.');
>>>>>>> a9b61bb87acca09106d68d902e3a7cbac7838827
    }
}
