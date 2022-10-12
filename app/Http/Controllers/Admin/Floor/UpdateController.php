<?php

namespace App\Http\Controllers\Admin\Floor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Floor\UpdateRequest;
use App\Models\Floor;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Floor $floor)
    {
        $data = $request->validated();
        $floor->update($data);
        return view('admin.floor.show', compact('floor'));
    }
}
