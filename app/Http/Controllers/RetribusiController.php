<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retribusi;
use App\Models\pembayaran;
class RetribusiController extends Controller
{
    //// PaymentController.php
// RetribusiController.php
public function index()
{
    $retribusis = Retribusi::all();
    return view('admin.pembayaran.index', compact('retribusis'));
}

public function create()
{
    $retribusis = Retribusi::all();
    return view('Admin.pembayaran.create');
}

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

}
