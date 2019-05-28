<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifsController extends Controller
{
    public function show(){
        $liens = Lien::all();
        $tarifs = Tarif::all();
        return view('vendor.belier-tarifs',['liens'=>$liens, 'tarifs'=>$tarifs ]);
    }
}
