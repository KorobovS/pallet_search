<?php

namespace App\Http\Controllers\Personal\Like;

use App\Http\Controllers\Controller;
use App\Models\Article;

class DeleteController extends Controller
{
    public function __invoke(Article $article)
    {
        auth()->user()->LikeArticles()->detach($article->id);
        return redirect()->route('personal.like.index');
    }
}
