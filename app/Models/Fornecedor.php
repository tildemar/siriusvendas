<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $table     = 'fornecedores' ;
    protected $fillable  = ['nome','site','uf','email'] ;
    // fillable tem a funçao de indicar os campos para gravação sob esse formato
    // App\Models\Fornecedor::create(['nome'=>'Fornecedor 2','site'=>'www.fornecedor2.com.br','email'=>'fornecedor2@mail.com','uf'=>'SS']);
}
