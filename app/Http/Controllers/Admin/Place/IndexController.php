<?php

namespace App\Http\Controllers\Admin\Place;

use App\Http\Controllers\Controller;
use App\Models\Place;

class IndexController extends Controller
{
    public function __invoke()
    {
        $places = Place::all();
        return view('admin.place.index', compact('places'));
    }
}
