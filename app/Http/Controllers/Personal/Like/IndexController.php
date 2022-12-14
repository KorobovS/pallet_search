<?php

namespace App\Http\Controllers\Personal\Like;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $articles = auth()->user()->likeArticles;
        return view('personal.like.index', compact('articles'));
    }
}
