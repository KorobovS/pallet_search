<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Requests\Admin\Article\UpdateRequest;
use App\Models\Article;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Article $article)
    {
        $data = $request->validated();
        $article = $this->service->update($data, $article);

        return view('admin.article.show', compact('article'));
    }
}
