<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Place;

class CreateController extends Controller
{
    public function __invoke()
    {
        $floors = Floor::all();
        $places = Place::all();
        return view('admin.article.create', compact('floors', 'places'));
    }
}
