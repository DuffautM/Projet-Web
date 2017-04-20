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
            $table->integer('id_user')->unsigned();
            $table->integer('id_activite')->unsigned();
            $table->integer('inscrit_activite');
            $table->integer('participant_activite');
            $table->foreign('id_user')->references('id')->on('t_users');
            $table->foreign('id_activite')->references('id')->on('activities');
            $table->timestamps();
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
