<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';//Correção no nome padrão da tabela    
    protected $fillable = ['nome', 'site','uf', 'email'];
}
