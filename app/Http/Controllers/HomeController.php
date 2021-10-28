<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function listMovies()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
