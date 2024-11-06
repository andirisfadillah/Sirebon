<?php

namespace App\Http\Controllers\WajibRetribusi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonfirmasiPembayaranController extends Controller
{
    public function index(){
        return view('Wajib-Retribusi.konfirmasipembayaranretribusi');
    }
}
