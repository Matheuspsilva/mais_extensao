<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professore extends Model
{
    protected $fillable = [
         'nome', 'email', 'password', 'matricula', 'departamento', 'titulacao', 'centro', 'curso'
       ];

}
