<?php


namespace App\Http\Controllers;

use App\Article;
use App\Models\Lien;
use Illuminate\Support\Str;
class AccueilController extends Controller{

    public function show(){

        $articles = Article::all()->sortByDesc( 'DATE_ARTICLE');
        $liens = Lien::all();

        return view('belier-accueil',['articles' => $articles, 'liens'=>$liens]);
}
}