<?php

namespace App\Http\Controllers\Admin\Article;

use App\Models\Article;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }
}
