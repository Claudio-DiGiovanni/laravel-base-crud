<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home () {
        $comics = Comic::all();
        return view('home', compact($comics));
    }
}
