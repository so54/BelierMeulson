<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use App\Models\PhotoEquipe;
use Illuminate\Http\Request;

class AssoPresentationController extends Controller
{
    public function show(){

        $photo_equipes = PhotoEquipe::all();
        $liens = Lien::all();
        return view('vendor.belier-asso-presentation',['photo_equipes' => $photo_equipes, 'liens'=>$liens]);
    }
}
