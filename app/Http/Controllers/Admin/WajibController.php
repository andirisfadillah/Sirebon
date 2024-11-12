<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kapalku;
use Illuminate\Support\Facades\DB;
use App\Models\WajibRetribusi;
use Illuminate\Http\Request;
use App\Models\Kapalku;

class WajibController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kapalku = Kapalku::all();
        return view('Admin.wajib-retribusi', compact('kapalku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.wajib-retribusi.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Log::info('Data yang di masukin:', $request->all());

        // // validasi inputan, biar tidak salah
        // $request->validate([
        //     ''
        // ])
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
        // Menampilkan halaman edit
        $kapalku = Kapalku::findOrFail($id);
        return view('Admin.Wajib-Retribusi.edit', compact('kapalku')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Menyimpan data yang telah diperbarui
        $kapalku = Kapalku::findOrFail($id);
        $kapalku->update($request->all()); 
        return redirect()->route('wajib-retribusi.index')->with('success', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $kapalku = Kapalku::findOrFail($id);
            $user = $kapalku->user;
            $kapalku->delete();
            if ($user) {
                $user->delete();
            }

            DB::commit();

            return redirect()->route('wajib-retribusi.index')->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('wajib-retribusi.index')->with('error', 'Terjadi kesalahan saat menghapus data');
        }
    }
}
