<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Controllers;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
}