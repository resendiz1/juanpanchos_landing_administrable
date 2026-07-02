<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('numeros_contacto', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->enum('tipo', ['whatsapp', 'telefono', 'telegram']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('numeros_contacto');
    }
};
