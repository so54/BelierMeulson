<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use Illuminate\Http\Request;

class RestaurationController extends Controller
{
    public function show(){
        $liens = Lien::all();
        return view('vendor.belier-restauration',['liens'=>$liens]);
    }
}
