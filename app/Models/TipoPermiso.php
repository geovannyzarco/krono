<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Permiso;

class TipoPermiso extends Model
{
    protected $table = 'tipo_permisos';

    protected $fillable = [
        'nombre',
    ];

    public function permisos(): HasMany
    {
        return $this->hasMany(Permiso::class, 'id_tipo_permiso');
    }
}
