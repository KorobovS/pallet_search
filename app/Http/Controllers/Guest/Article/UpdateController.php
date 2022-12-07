<?php

namespace App\Http\Controllers\Guest\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Article\UpdateRequest;
use App\Models\Article;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Article $article)
    {
        $data = $request->validated();
        $placeIds = $data['place_ids'];
        unset($data['place_ids']);
        $article->update($data);
        $article->places()->sync($placeIds);

        return view('guest.article.show', compact('article'));
    }
}
