<?php

namespace App\Http\Controllers\Guest\Search;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $s = $request->search;
        $articles = Article::query()->where('article', 'LIKE', "%$s%")->get();

        return view('search', compact('articles'));
    }
}
