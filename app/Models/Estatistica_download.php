<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatistica_download extends Model
{
    use HasFactory;

    public function autor(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }

    public function artigo_cintifico(): BelongsTo
    {
        return $this->belongsTo(Artigo_cintifico::class);

    }

    public function monografia(): BelongsTo
    {
        return $this->belongsTo(Monografia::class);

    }


}
