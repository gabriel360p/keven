<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the Categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }

    protected $table='categorias';

    protected $fillable=[
        'nome',
    ];
}
