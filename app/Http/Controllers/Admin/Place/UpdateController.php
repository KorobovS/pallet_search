<?php

namespace App\Http\Controllers\Admin\Place;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Place\UpdateRequest;
use App\Models\Place;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Place $place)
    {
        $data = $request->validated();
        $place->update($data);
        return view('admin.place.show', compact('place'));
    }
}
