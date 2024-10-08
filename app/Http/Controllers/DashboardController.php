<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $Tuser = User::count();
        $Tpelanggan = Pelanggan::count();
        $Tpenjualan = Penjualan::SUM('TotalHarga');

        $historiPenjualan = Penjualan::orderBy('created_at', 'desc')->take(3)->get();
        
        return view('home.dashboard', compact('Tuser','Tpelanggan','Tpenjualan', 'historiPenjualan'));
    }
}
