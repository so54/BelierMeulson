<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use Illuminate\Http\Request;

class MentionsController extends Controller
{
    public function show(){
        $liens = Lien::all();
        return view('vendor.belier-mentions', ['liens'=>$liens]);
    }
}
