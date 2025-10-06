<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            // FK a empleados
            $table->foreignId('id_empleado')->constrained('empleados')->cascadeOnDelete();
            // FK a tipo_permisos
            $table->foreignId('id_tipo_permiso')->constrained('tipo_permisos')->cascadeOnDelete();

            $table->date('fecha_creacion');
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
            $table->string('motivo');
            $table->string('adjuntos')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('estado')->default('PENDIENTE'); // pendiente, aprobado, rechaz
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
