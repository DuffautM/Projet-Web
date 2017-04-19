<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->text('nom_user');
            $table->text('prenom_user');
            $table->text('mail_user');
            $table->text('password_user');
            $table->text('phrase_user');
            $table->text('promo_user');
            $table->integer('annee_user');
            $table->date('naissance_user');
            $table->text('centre_user');
            $table->text('club_user');
            $table->text('avatar_user');
            $table->integer('privilege_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}
