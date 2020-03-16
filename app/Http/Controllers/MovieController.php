<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function topMovies() 
    {
       $top_movies = Movie::orderBy("rating", "desc")
        ->limit(10)
        ->get();

        return $top_movies;

    }

    public function movieOfTheWeek() 
    {
        $movie_id = 7;

        $movie = Movie::with("genres")
            ->with("people")
            ->where("id", $movie_id)
            ->first();

        return $movie;




        // $movie = Movie::findOrFail($movie_id);

        // $genres = $movie->genres;

        // $people = $movie->people;

        // return [
        //     'movie' => $movie,
        //     'genres' => $genres,
        //     'actors' => $people
        // ];
    }
}
