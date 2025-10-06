<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Unidad;

class Division extends Model
{
    protected $table = 'divisiones';

    protected $fillable = [
        'nombre',
        'ubicacion',
        'email',
        'id_jefe',
    ];

    /**
     * Unidades que pertenecen a la division
     */
    public function unidades(): HasMany
    {
        return $this->hasMany(Unidad::class, 'id_division');
    }
}
