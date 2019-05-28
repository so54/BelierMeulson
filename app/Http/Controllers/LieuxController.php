<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use App\Models\PhotoLieu;
use Illuminate\Http\Request;

class LieuxController extends Controller
{
    public function show(){

        $photo_lieux = PhotoLieu::all();
        $liens = Lien::all();

        return view('vendor.belier-lieux', ['photo_lieux'=>$photo_lieux, 'liens'=>$liens]);
    }
}
