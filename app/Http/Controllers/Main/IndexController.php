<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $articles=Article::all();
        return view('main.index', compact('articles'));
    }
}
