<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {

            $table->bigIncrements('id');
            //FK
            $table->unsignedBigInteger('professores_id');
            $table->foreign('professores_id')->references('id')->on('professores');
            $table->string('nome_projeto');
            $table->string('area_tematica');
            $table->string('centro');
            $table->string('curso');
            //Está String (migration rollback)
            $table->float('investimento');
            $table->integer('semestre');
            $table->string('demandas');
            $table->string('problematicas');
            $table->string('observacoes');
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
        Schema::dropIfExists('projetos');
    }
}
