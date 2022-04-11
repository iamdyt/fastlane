<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\MovieRepository;

class MovieController extends Controller
{
    
    public function addMovie(MovieRepository $child){
        return $child->addMovie();
    }

    public function allMovies(MovieRepository $child){
        return $child->allMovies();
    }
}
