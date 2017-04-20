<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nom_activite');
            $table->text('detail_activite');
            $table->boolean('public_activite');
            $table->text('club_activite');
            $table->text('date_activite');
            $table->integer('prix_activite');
            $table->boolean('ok_activite');
            $table->text('budget_activite');
            $table->text('gain_activite');
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
        Schema::drop('activities');
    }
}
