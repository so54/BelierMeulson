<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', 'AccueilController@show')->name('home');

Route::get('/association/presentation', 'AssoPresentationController@show')->name('presentation');

Route::get('/association/fonctionnement', 'AssoFonctionnementController@show')->name('fonctionnement');

Route::get('/association/lieux', 'LieuxController@show')->name('lieux');

Route::get('/restauration', 'RestaurationController@show')->name('restauration');

Route::get('/activites/periscolaire', 'PeriscolaireController@show')->name('periscolaire');

Route::get('/activites/mercredis', 'MercredisController@show')->name('mercredis');

Route::get('/activites/vacances', 'VacancesController@show')->name('vacances');

Route::get('/tarifs', 'TarifsController@show')->name('tarifs');

Route::get('/contact', 'ContactController@show')->name('contact');

Route::post('/contact', 'ContactController@store')->name('contact');

Route::get('/actualites', 'ActualitesController@show')->name('actualites');

Route::get('/plan', 'PlanController@show')->name('plan');

Route::get('/mentions', 'MentionsController@show')->name('mentions');

Route::get('/admin', 'AdminController@show')->name('admin');

Auth::routes();

Route::post('/galerie', 'GalerieController@store')->name('galerie');

Route::get('/galerie', 'GalerieController@show')->name('galerie');

Route::middleware('admin')->group(function () {
    Route::resource ('evenement', 'EvenementController', [
        'except' => 'show'
    ]);
});

Route::get('/logout' , 'Auth\LoginController@logout');

Route::middleware ('admin')->group (function () {
    Route::resource ('photo', 'PhotoController',[
        'only' => ['create', 'store', 'destroy', 'update']
    ]);
    Route::name ('photo.')->middleware ('ajax')->group (function () {
        Route::prefix('photo')->group(function () {
        });
});
    Route::name ('maintenance.')->prefix('maintenance')->group(function () {
        Route::name ('index')->get ('/', 'AdminController@edit');
        Route::name ('update')->put ('/', 'AdminController@update');
    });
});


Route::name('evenement')->get('evenement/{slug}', 'PhotoController@evenement');

Route::middleware ('auth')->group (function () {
    Route::resource ('profile', 'ProfileController', [
        'only' => ['edit', 'update', 'destroy', 'show'],
        'parameters' => ['profile' => 'user']
    ]);


});