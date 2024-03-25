<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo_Cientifico extends Model
{
    use HasFactory;
    protected $table="artigo_cintificos";
    protected $fillable=[
        'titulo',
        'resumo',
        'volume',
        'id_categoria',
        'id_autores',
        'id_data',
        'id_palavra_chave'
    ];
}
