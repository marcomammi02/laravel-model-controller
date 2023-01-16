<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page() {
        $movies = Movie::all();

        return view('guest.page', [
            'movies' =>$movies,
        ]);
    }
}
