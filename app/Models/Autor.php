<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $fillable=[
        'instituicao_vinculado',
        'nacionalidade',
        'grau_academico',
        'usuario_id'
    ];
}
