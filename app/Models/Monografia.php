<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monografia extends Model
{
    use HasFactory;
    protected $fillable=[
        'titulo_monografia',
        'instituicao_ensino',
        'resumo',
        'id_categoria',
        'id_autores',
        'id_data',
        'id_palavra_chave'
    ];
}
