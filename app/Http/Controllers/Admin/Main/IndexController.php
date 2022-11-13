<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Floor;
use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['usersCount'] = User::all()->count();
        $data['floorsCount'] = Floor::all()->count();
        $data['placesCount'] = Place::all()->count();
        $data['articlesCount'] = Article::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
