<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Floor;
use App\Models\Place;

class EditController extends Controller
{
    public function __invoke(Article $article)
    {
        $floors = Floor::all();
        $places = Place::all();
        return view('admin.article.edit', compact('article', 'floors', 'places'));
    }
}
