<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

class BarangController extends Controller
{
    public function barang(){
        $barang = Barang::paginate(4);
        return view('barang')
        ->with('title','Barang')
        ->with('Barang',$barang);
    }
}
