<?php

namespace App\Http\Controllers\Admin\Floor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Floor\StoreRequest;
use App\Models\Floor;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Floor::firstOrCreate($data);
        return redirect()->route('admin.floor.index');
    }
}
