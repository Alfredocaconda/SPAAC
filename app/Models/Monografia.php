<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monografia extends Model
{
    use HasFactory;

    public function autor(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }

    public function data(): HasOne
    {
        return $this->belongsTo(Data::class);
    }

    public function palavra_chave(): HasOne
    {
        return $this->belongsTo(Palavra_chave::class);
    }

    public function publicacao(): HasOne
    {
        return $this->belongsTo(Publicacao::class);
    }

    public function revisao(): HasOne
    {
        return $this->belongsTo(Revisao::class);
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

}
