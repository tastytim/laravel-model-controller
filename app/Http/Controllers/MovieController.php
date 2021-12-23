<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request as StaticRequest;
use App\Movie;

class MovieController extends Controller
{
    function index()
    {
        $data = Movie::all();
        return view("movies.index", ["movies" => $data]);
    }
}
