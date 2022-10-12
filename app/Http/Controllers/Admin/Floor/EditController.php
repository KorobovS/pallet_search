<?php

namespace App\Http\Controllers\Admin\Floor;

use App\Http\Controllers\Controller;
use App\Models\Floor;

class EditController extends Controller
{
    public function __invoke(Floor $floor)
    {
        return view('admin.floor.edit', compact('floor'));
    }
}
