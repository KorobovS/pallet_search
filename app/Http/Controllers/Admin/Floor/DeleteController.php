<?php

namespace App\Http\Controllers\Admin\Floor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Floor\UpdateRequest;
use App\Models\Floor;

class DeleteController extends Controller
{
    public function __invoke(Floor $floor)
    {
        $floor->delete();
        return redirect()->route('admin.floor.index');
    }
}
