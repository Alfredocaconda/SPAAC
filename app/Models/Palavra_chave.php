<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palavra_chave extends Model
{
    use HasFactory;

    public function monografia(): BelongsTo
    {
        return $this->belongsTo(Monografia::class);

    }

    public function artigo_cintifico(): BelongsTo
    {
        return $this->belongsTo(Artigo_cintifico::class);

    }

    
}
