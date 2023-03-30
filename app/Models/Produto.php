<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Produto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class);
    }

    protected $table ='produtos';

    protected $fillable=[
        'nome',
        'foto',
        'descricao',
        'preco',
        'categoria_id',
    ];
}
