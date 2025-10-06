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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ONI')->unique();

            // Relaciones
            $table->foreignId('id_grupo')->nullable()->constrained('grupos')->nullOnDelete();
            $table->foreignId('id_horario')->nullable()->constrained('horarios')->nullOnDelete();
            $table->foreignId('id_unidad')->nullable()->constrained('unidades')->nullOnDelete();
            $table->foreignId('id_estado')->nullable()->constrained('estados')->nullOnDelete();
            $table->foreignId('id_categoria')->nullable()->constrained('categorias')->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
