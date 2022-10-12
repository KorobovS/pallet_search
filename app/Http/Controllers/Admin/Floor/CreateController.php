<?php

namespace App\Http\Controllers\Admin\Floor;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.floor.create');
    }
}
