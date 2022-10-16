<?php

namespace App\Http\Controllers\Admin\Place;

use App\Http\Controllers\Controller;
use App\Models\Place;

class DeleteController extends Controller
{
    public function __invoke(Place $place)
    {
        $place->delete();
        return redirect()->route('admin.place.index');
    }
}
