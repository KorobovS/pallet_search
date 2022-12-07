<?php

namespace App\Http\Controllers\Guest\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;

class IndexController extends Controller
{
    public function __invoke()
    {
        $articles = Article::all();
        return view('guest.article.index', compact('articles'));
    }
}
