<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email');
            $table->string('password');
            $table->integer('matricula');
            $table->string('departamento');
            $table->string('titulacao');
            $table->string('centro');
            $table->string('curso');
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
        Schema::dropIfExists('professores');
    }
}
