<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Article\StoreRequest;
use App\Models\Article;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        try {
            $data = $request->validated();
            $placeIds = $data['place_ids'];
            unset($data['place_ids']);
            $article = Article::firstOrCreate($data);
            $article->places()->attach($placeIds);
            return redirect()->route('admin.article.index');
        } catch (\Exception $exception) {
            abort(404);
        }
    }
}
