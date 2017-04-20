<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->integer('id_user')->unsigned();
            $table->integer('id_club')->unsigned();
            $table->integer('privilege_club');
            $table->integer('nbr_club');
            $table->foreign('id_user')->references('id')->on('t_users');
            $table->foreign('id_club')->references('id')->on('club');
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
        Schema::drop('members');
    }
}
