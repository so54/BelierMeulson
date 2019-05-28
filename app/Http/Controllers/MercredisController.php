<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use Illuminate\Http\Request;

class MercredisController extends Controller
{
    public function show(){

        $liens = Lien::all();
        return view('vendor.belier-mercredi', ['liens'=> $liens]);
    }
}
