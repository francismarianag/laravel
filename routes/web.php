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

Route::get('/', function () {
    return view('welcome');
});


Route::get('miPrimeraRuta', function(){
    echo "Hola soy laravel";
});

Route::get('resultado/{numero}/{opcional?}', function($numero, $opcional = null){
    if (isset($opcional)) {
        return $numero * $opcional;
    } 
    return $numero % 2 == 0 ? 'Soy par' : 'Soy impar';
    
});

Route::get('movies/{id}', 'MoviesController@searchMovieId');
Route::get('/movies/search/{title}', 'MoviesController@searchMovieByTitle');