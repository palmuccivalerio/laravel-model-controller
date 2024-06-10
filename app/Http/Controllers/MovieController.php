<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    function index() {
        
        $movies = ['111', '222', '333'];

        return view('movie', compact('movies'));
    }
}
