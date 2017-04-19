<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodies', function (Blueprint $table) {
            $table->increments('id_goodies');
            $table->text('nom_goodies');
            $table->text('type_goodies');
            $table->text('detail_goodies');
            $table->float('prix_goodies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goodies');
    }
}
