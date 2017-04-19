<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id_user')->unsigned();
            $table->integer('id_activite')->unsigned();
            $table->integer('inscrit_activite');
            $table->integer('participant_activite');
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_activite')->references('id_activite')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participants');
    }
}
