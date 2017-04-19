<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikeDislikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike', function (Blueprint $table) {
            $table->integer('id_photo')->unsigned();
            $table->integer('id_activite')->unsigned();
            $table->integer('like_photo');
            $table->foreign('id_activite')->references('id_activite')->on('activities');
            $table->foreign('id_photo')->references('id_photo')->on('photo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('like_dislike');
    }
}
