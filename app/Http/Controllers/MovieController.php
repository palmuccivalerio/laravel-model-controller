<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    function index() {
        
        $movies = Movie::all();

        return view('movie', compact('movies'));
    }
}
