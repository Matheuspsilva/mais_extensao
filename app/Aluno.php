<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'projetos_id','nome', 'email', 'password', 'matricula', 'curso', 'centro'
       ];
}
