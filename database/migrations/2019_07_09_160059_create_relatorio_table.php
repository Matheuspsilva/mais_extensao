<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatorioTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorios', function (Blueprint $table) {

            $table->bigIncrements('id');
            //FK
            $table->unsignedBigInteger('projetos_id');
            $table->foreign('projetos_id')->references('id')->on('projetos');
            $table->string('arquivo');
            $table->integer('semestre');
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
        Schema::dropIfExists('relatorios');
    }
}
