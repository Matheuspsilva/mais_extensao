<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {

            $table->bigIncrements('id');
            //FK
            $table->unsignedBigInteger('projetos_id');
            $table->foreign('projetos_id')->references('id')->on('projetos');
            $table->string('nome');
            $table->string('email');
            $table->string('password');
            $table->integer('matricula');
            $table->string('curso');
            $table->string('centro');
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
        Schema::dropIfExists('alunos');
    }
}
