<?php

namespace App\Http\Controllers\Admin\Floor;

use App\Http\Controllers\Controller;
use App\Models\Floor;

class ShowController extends Controller
{
    public function __invoke(Floor $floor)
    {
        return view('admin.floor.show', compact('floor'));
    }
}
