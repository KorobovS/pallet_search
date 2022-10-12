<?php

namespace App\Http\Controllers\Admin\Floor;

use App\Http\Controllers\Controller;
use App\Models\Floor;

class IndexController extends Controller
{
    public function __invoke()
    {
        $floors = Floor::all();
        return view('admin.floor.index', compact('floors'));
    }
}
