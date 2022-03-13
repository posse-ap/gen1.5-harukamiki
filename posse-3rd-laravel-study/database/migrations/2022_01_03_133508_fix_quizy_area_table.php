<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixQuizyAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('quizy_area');

        Schema::create('quizy_areas', function(Blueprint $table){
            $table->increments('id');
            $table->string('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('quizy_area', function(Blueprint $table){
            $table->increments('id');
            $table->string('area');
        });

        Schema::dropIfExists('quizy_areas');

    }
}
