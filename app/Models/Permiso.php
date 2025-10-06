<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Empleado;
use App\Models\TipoPermiso;
use App\Models\Compensado;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permiso extends Model
{
    protected $table = 'permisos';

    protected $fillable = [
        'id_empleado',
        'id_tipo_permiso',
        'fecha_creacion',
        'fecha_inicio',
        'fecha_fin',
        'motivo',
        'adjuntos',
        'comentarios',
        'estado',
    ];

    public function empleado(): BelongsTo
    {
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }

    public function tipoPermiso(): BelongsTo
    {
        return $this->belongsTo(TipoPermiso::class, 'id_tipo_permiso');
    }

    public function compensados(): HasMany
    {
        return $this->hasMany(Compensado::class, 'id_permiso');
    }
}
