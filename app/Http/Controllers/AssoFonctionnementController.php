<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use App\Models\Tarif;
use Illuminate\Http\Request;

class AssoFonctionnementController extends Controller
{
    public function show(){

        $liens = Lien::all();
        $tarifs = Tarif::all();

        return view('vendor.belier-fonctionnement', ['liens' => $liens,'tarifs' =>$tarifs]);
    }
}
