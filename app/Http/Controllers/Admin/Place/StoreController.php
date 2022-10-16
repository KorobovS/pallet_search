<?php

namespace App\Http\Controllers\Admin\Place;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Place\StoreRequest;
use App\Models\Place;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Place::firstOrCreate($data);
        return redirect()->route('admin.place.index');
    }
}
