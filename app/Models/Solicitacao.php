<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $fillable = [
        'nome', 'email', 'titulo', 'descricao', 'categoria', 'status'
    ];
}