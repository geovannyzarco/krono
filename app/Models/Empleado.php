<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Grupo;
use App\Models\Horario;
use App\Models\Unidad;
use App\Models\Estado;
use App\Models\Categoria;
use App\Models\Permiso;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    protected $fillable = [
        'nombre',
        'ONI',
        'id_grupo',
        'id_horario',
        'id_unidad',
        'id_estado',
        'id_categoria',
    ];

    public function grupo(): BelongsTo
    {
        return $this->belongsTo(Grupo::class, 'id_grupo');
    }

    public function horario(): BelongsTo
    {
        return $this->belongsTo(Horario::class, 'id_horario');
    }

    public function unidad(): BelongsTo
    {
        return $this->belongsTo(Unidad::class, 'id_unidad');
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function permisos(): HasMany
    {
        return $this->hasMany(Permiso::class, 'id_empleado');
    }
}
