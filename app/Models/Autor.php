<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }

    public function formacao(): HasMany
    {
        return $this->hasMany(Formacao::class);
    }

    public function telefone(): HasMany
    {
        return $this->hasMany(Telefone::class);
    }

    public function publicacao(): HasMany
    {
        return $this->hasMany(Publicacao::class);
    }

    public function monografia(): HasMany
    {
        return $this->hasMany(Monografia::class);
    }

    public function artigo_cintifico(): HasMany
    {
        return $this->hasMany(Artigo_cintifico::class);
    }

    public function estatistica_download(): HasMany
    {
        return $this->hasMany(Estatistica_download::class);
    }
}

