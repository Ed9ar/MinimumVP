<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutriplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutriplans', function (Blueprint $table) {
            $table->id();
            $table->string('lunes', 1000)->default('');
            $table->string('martes', 1000)->default('');
            $table->string('miercoles', 1000)->default('');
            $table->string('jueves', 1000)->default('');
            $table->string('viernes', 1000)->default('');

            $table->string('nutri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutriplans');
    }
}
