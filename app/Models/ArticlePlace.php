<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlePlace extends Model
{
    use HasFactory;

    protected $table = 'article_places';
    protected $guarded = false;
}
