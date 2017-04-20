<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_users', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('t_users');
    }
}
