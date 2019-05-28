<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use Illuminate\Http\Request;

class VacancesController extends Controller
{
    public function show(){

        $liens = Lien::all();
        return view('vendor.belier-vacances', ['liens'=>$liens]);
    }
}
