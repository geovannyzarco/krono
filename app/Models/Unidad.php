<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Division;

class Unidad extends Model
{
    protected $table = 'unidades';

    protected $fillable = [
        'nombre',
        'descripcion',
        'id_division',
        'id_jefe',
    ];

    /**
     * La division a la que pertenece la unidad
     */
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'id_division');
    }
}
