<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id_comment');
            $table->text('text_comment');
            $table->date('date_comment');
            $table->integer('id_photo')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_photo')->references('id_photo')->on('photo');
            $table->foreign('id_user')->references('id_user')->on('t_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
