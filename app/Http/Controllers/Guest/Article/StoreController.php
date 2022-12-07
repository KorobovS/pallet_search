<?php

namespace App\Http\Controllers\Guest\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\Article\StoreRequest;
use App\Models\Article;
use PHPUnit\Exception;

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
        } catch (\Exception $exception) {
            abort(404);
        }

        return redirect()->route('guest.article.index');
    }
}
