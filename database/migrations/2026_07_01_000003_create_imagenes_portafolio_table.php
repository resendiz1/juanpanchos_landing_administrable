<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('imagenes_portafolio', function (Blueprint $table) {
            $table->id();
            $table->string('path_image');
            $table->foreignId('id_proyecto')->constrained('proyectos')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('imagenes_portafolio');
    }
};
