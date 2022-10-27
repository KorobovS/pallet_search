<?php

namespace App\Http\Controllers\Admin\Article;

use App\Models\Article;

class ShowController extends BaseController
{
    public function __invoke(Article $article)
    {
        return view('admin.article.show', compact('article'));
    }
}
