<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    
    use SoftDeletes;

    protected $table = 'fornecedores';//Correção no nome padrão da tabela    
    protected $fillable = ['nome', 'site','uf', 'email'];
}
