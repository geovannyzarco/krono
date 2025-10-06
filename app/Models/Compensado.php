<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Permiso;

class Compensado extends Model
{
    protected $table = 'compensados';

    protected $fillable = [
        'fecha_creacion',
        'desde',
        'hasta',
        'justificacion',
        'adjuntos',
        'comentarios',
        'id_permiso',
    ];

    public function permiso(): BelongsTo
    {
        return $this->belongsTo(Permiso::class, 'id_permiso');
    }
}
