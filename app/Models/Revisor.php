<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisor extends Model
{
    use HasFactory;

    public function revisao(): HasMany
    {
        return $this->hasMany(Revisao::class);
    }
}
