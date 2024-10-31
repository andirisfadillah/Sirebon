<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Wajib-Retribusi.profil');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
