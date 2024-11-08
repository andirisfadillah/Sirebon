<?php

namespace App\Http\Controllers\WajibRetribusi;

use App\Http\Controllers\Controller;
use App\Models\Kapalku;
use Illuminate\Http\Request;

class WajibRetribusiController extends Controller
{
    public function index()
    {
        return view('Wajib-Retribusi.profil', compact('kapalku'));
    }
}
