<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function pelanggan(){
        
        $pelanggan = Pelanggan::paginate(5);
        return view('pelanggan')
        ->with('title','Customer')
        ->with('Pelanggan',$pelanggan);
    }
}
