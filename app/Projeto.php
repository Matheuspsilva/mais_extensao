<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'professores_id','nome_projeto', 'area_tematica', 'centro', 'curso', 'investimento', 'semestre', 'demandas', 'problematicas', 'observacoes'
      ];

}
