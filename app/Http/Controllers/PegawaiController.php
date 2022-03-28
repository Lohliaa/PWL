<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function pegawai(){
        $pegawai = Pegawai::paginate(3);
        return view('pegawai')
        ->with('title','Pegawai')
        ->with('Pegawai',$pegawai);
    }
}
