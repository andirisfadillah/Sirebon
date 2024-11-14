<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\WajibRetribusi;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil data wajib retribusi berdasarkan user yang login
        $wajibRetribusi = WajibRetribusi::where('id_user', auth()->user()->id)->get();
       return view('Wajib-Retribusi.profil', compact('wajibRetribusi'));

    }

    public function update(Request $request) {
        // validasi input dari form
        $request->validate([
            'username' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'namaLengkap' => 'required|string|max:255',
            'telepon' => 'required|string|max:16',
            'alamat' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        
        // update username di tabel users
        $user->username = $request->input('username');
        $user->save();  // simpan perubahan ke tabel users
    
        // ambil data wajib_retribusi yang terhubung dengan user
        $wajibRetribusi = $user->wajibRetribusi; // misalnya ada relasi di model User
    
        // update data wajib_retribusi jika ada
        foreach ($wajibRetribusi as $wajib) {
            $wajib->nik = $request->input('nik');
            $wajib->nama = $request->input('namaLengkap');
            $wajib->no_hp = $request->input('telepon');
            $wajib->alamat = $request->input('alamat');
            $wajib->save(); // simpan perubahan ke tabel wajib_retribusi
        }
    
        // redirect kembali dengan pesan sukses
        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function gantiPassword()
    {
        return view('Wajib-Retribusi.profil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function changePassword(Request $request)
{
    // Cek apakah password lama sesuai
    if (!Hash::check($request->current_password, auth()->user()->password)) {
        return back()->with('error', 'Password lama tidak sesuai dengan password Anda saat ini.');
    }

    // Cek apakah password baru sesuai dengan konfirmasi password
    if ($request->new_password !== $request->new_password_confirmation) {
        return back()->with('error', 'Password baru dan konfirmasi password tidak cocok.');
    }

    // Update password pengguna
    auth()->user()->update([
        'password' => Hash::make($request->new_password)
    ]);

    return back()->with('status', 'Password berhasil diubah.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
