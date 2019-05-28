<?php

namespace App\Http\Controllers;

use App\Models\Lien;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function show()
    {
        $liens = Lien::all();
        return view('vendor.belier-plan', ['liens'=>$liens]);
    }
}
