<?php

namespace App\Http\Controllers;

use App\Article;
use App\Models\Lien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * @method format(string $string)
 */
class ActualitesController extends Controller
{


    /**
     * @return mixed
     */
    public function show(){

        $liens = Lien::all();
        $articles = Article::all()->sortByDesc( 'DATE_ARTICLE');

        return view('vendor.belier-actualites',['articles' => $articles, 'liens'=>$liens]);
    }
}


