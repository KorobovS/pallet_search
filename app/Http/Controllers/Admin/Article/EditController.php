<?php

namespace App\Http\Controllers\Admin\Article;

use App\Models\Article;
use App\Models\Floor;
use App\Models\Place;

class EditController extends BaseController
{
    public function __invoke(Article $article)
    {
        $floors = Floor::all();
        $places = Place::all();
        return view('admin.article.edit', compact('article', 'floors', 'places'));
    }
}
