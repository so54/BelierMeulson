<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnexionRequest;
use App\Models\Evenement;
use App\Models\Lien;
use App\Models\Photo;
use App\Models\User;
use App\Repositories\PhotoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GalerieController extends Controller
{

    public function show(PhotoRepository $repository){
        $liens = Lien::all();
        $evenements=Evenement::all();
        $users=User::all();

        if (Auth::check()) {
$photos=$repository->getAllImages();
            return view('vendor.belier-galerie', ['liens' => $liens, 'photos'=>$photos, 'evenements'=>$evenements, 'users'=>$users]);
        }
        return view('auth.login',['liens'=>$liens]);
    }

    public function store()
    {
        $liens = Lien::all();
        if (Auth::guest())
            return Redirect::route('login');


        return view('vendor.belier-galerie',['liens'=>$liens]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }



}
