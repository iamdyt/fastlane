<?php

namespace App\Repository;

use App\Models\Movie;

class MovieRepository{
    public function addMovie(){
        $posterImage = request()->file('poster');
        $newPosterImageName = uniqid().$posterImage->getClientOriginalName();
        Movie::create([
            'title' => request()->query('title'),
            'synopsis' => request()->query('synopsis'),
            'showtime' => request()->query('showtime'),
            'cinema_id' => request()->query('cinema_id'),
            'movie_poster' => $newPosterImageName
        ]);
        request()->file('poster')->move(public_path('poster'), $newPosterImageName);
        return response()->json(['status'=>200, 'message'=> 'Movie Added Successfully']);

    }

    public function allMovies(){
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
}