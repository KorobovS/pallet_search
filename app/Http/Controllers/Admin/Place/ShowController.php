<?php

namespace App\Http\Controllers\Admin\Place;

use App\Http\Controllers\Controller;
use App\Models\Place;

class ShowController extends Controller
{
    public function __invoke(Place $place)
    {
        return view('admin.place.show', compact('place'));
    }
}
