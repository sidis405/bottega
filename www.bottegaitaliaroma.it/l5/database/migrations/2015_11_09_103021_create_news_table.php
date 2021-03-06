<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('slug');
            $table->string('excerpt');
            $table->text('body');
            $table->text('tags')->nullable();
            $table->text('seo_description')->nullable();
            $table->integer('position')->nullable();
            $table->integer('fixed')->default(0);
            $table->integer('published')->default(0);
            $table->integer('featured_image_id');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('news');
    }
}
