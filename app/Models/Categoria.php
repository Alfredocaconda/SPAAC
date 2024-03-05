<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function monografia(): HasMany
    {
        return $this->hasMany(Monografia::class);
    }

    public function artigo_cientifico(): HasMany
    {
        return $this->hasMany(Artigo_cientifico::class);
    }

}
