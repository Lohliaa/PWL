<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;

class SuplierController extends Controller
{
    public function suplier(){
        $suplier = Suplier::paginate(5);
        return view('suplier')
        ->with('title','Supplier')
        ->with('Suplier',$suplier);

    }
}
