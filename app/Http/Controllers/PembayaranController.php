<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pembayaran;
use App\Models\Retribusi;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $retribusis = Retribusi::all();
    return view('admin.pembayaran.index', compact('retribusis'));
}

public function create(){
    return view('Admin.pembayaran.create');
}
 // PaymentController.php
public function store(Request $request)
{
    $request->validate([
        'retribusi_id' => 'required|exists:retribusis,id',
        'amount_paid' => 'required|numeric|min:0',
    ]);

    $pembayaran = new pembayaran([
        'user_id' => auth()->id(),
        'retribusi_id' => $request->retribusi_id,
        'amount_paid' => $request->amount_paid,
        'status' => 'paid',
    ]);

    $pembayaran->save();

    return redirect()->back()->with('success', 'Pembayaran berhasil');
}

// pembayaranController.php
public function history()
{
    $pembayarans = pembayaran::where('user_id', auth()->id())->with('retribusi')->get();
    return view('pembayaran.history', compact('payments'));
}

}
