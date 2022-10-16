<?php

namespace App\Http\Controllers\Admin\Place;

use App\Http\Controllers\Controller;
use App\Models\Place;

class EditController extends Controller
{
    public function __invoke(Place $place)
    {
        return view('admin.place.edit', compact('place'));
    }
}
