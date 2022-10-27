<?php

namespace App\Service;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $placeIds = $data['place_ids'];
            unset($data['place_ids']);
            $article = Article::firstOrCreate($data);
            $article->places()->attach($placeIds);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $article)
    {
        try {
            DB::beginTransaction();
            $placeIds = $data['place_ids'];
            unset($data['place_ids']);
            $article->update($data);
            $article->places()->sync($placeIds);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $article;
    }
}
