<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('starships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('model');
            $table->string('manufacturer');
            $table->string('crew_size');
            $table->integer('cost');
            $table->string('starship_class');
            $table->integer('cargo_capacity');
            $table->integer('max_atmosphering_speed');
            $table->integer('MGLT');            
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
        Schema::dropIfExists('starships');
    }
}
