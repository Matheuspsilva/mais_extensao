<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Relatorio extends Model
{
    protected $fillable = [
        'semestre', 'projetos_id','arquivo'];
}
