<?php

namespace App\Http\Controllers\Admin\Place;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.place.create');
    }
}
