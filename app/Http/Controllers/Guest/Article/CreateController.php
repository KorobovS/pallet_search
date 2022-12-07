<?php

namespace App\Http\Controllers\Guest\Article;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Place;

class CreateController extends Controller
{
    public function __invoke()
    {
        $floors = Floor::all();
        $places = Place::all();
        return view('guest.article.create', compact('floors', 'places'));
    }
}
