<?php

namespace App\Http\Controllers\WajibRetribusi;

use App\Http\Controllers\Controller;
use App\Models\Kapalku;
use App\Models\WajibRetribusi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WajibRetribusiController extends Controller
{
    public function index()
    {
        // ambil data wajib retribusi yang punya user dengan level 'Wajib Retribusi'
        $kapalku = kapalku::whereHas('user', function ($query) {
            $query->where('level', 'Wajib Retribusi');
        })->get(); 
        return view('Wajib-Retribusi.profil', compact('kapalku')); // kirim data ke view)
    }

    public function edit($id)
    {
        // cari data wajib_retribusi berdasarkan id
        $kapalku = kapalku::findOrFail($id);
        return view('Wajib-Retribusi.edit', compact('wajib')); // tampilkan halaman edit
        }

        public function update(Request $request, $id)
    {
        // cari data wajib_retribusi berdasarkan id
        $kapalku = kapalku::findOrFail($id);
        $kapalku->update($request->all()); // update data yang diubah
        return redirect()->route('Wajib-Retribusi.index')->with('success', 'Data udah berhasil diubah.');
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            // cari data wajib_retribusi berdasarkan id
            $kapalku = kapalku::findOrFail($id);
            $user = $kapalku->user; // cari user yang terhubung
            $kapalku->delete(); // hapus data wajib_retribusi
            if ($user) {
                $user->delete(); // hapus juga usernya
            }

            DB::commit();

            return redirect()->route('Wajib-Retribusi.index')->with('success', 'Data udah kebuang');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('Wajib-Retribusi.index')->with('error', 'Eh, ada error waktu ngehapus datanya.');
        }
    }

    public function create()
    {
        return view('Wajib-Retribusi.create'); // tampilin form buat tambah data
        }
}


