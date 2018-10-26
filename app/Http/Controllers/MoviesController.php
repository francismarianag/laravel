<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    
class MoviesController extends Controller


{
    public $movies = [
        1 => "Toy Story",
        2 => "Depredador 2",
        3 => "Mad Max",
        4 => "Titanic",
        5 => "Freddy Vs. Jason",
        6 => "Arma Mortal 4",
        7 => "Spaceballs",
        8 => "La Pistola Desnuda 33 1/3"
    ];

    public function searchMovieId($id){
        return $this->movies[$id];
        
    }

    public function searchMovieByTitle($title){
        foreach ($this->movies as $value) {
            if ( strtolower($value) == strtolower($title) ) {
                return $value;
            }
        }
        
    }
}
