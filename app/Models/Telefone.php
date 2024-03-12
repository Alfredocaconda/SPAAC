<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;

    public function autor(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }
}
