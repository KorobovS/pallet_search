<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('place_id');
            $table->timestamps();

            $table->index('article_id', 'article_place_article_idx');
            $table->index('place_id', 'article_place_place_idx');
            $table->foreign('article_id', 'article_place_article_fk')->on('articles')->references('id');
            $table->foreign('place_id', 'article_place_place_fk')->on('places')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_places');
    }
};
