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
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->string('estadoEnvio');
            $table->string('fechaEnvio');
            $table->string('metodoEnvio');
            $table->foreignId('fk_id_venta')->references('id')->on('ventas')->onDelete('cascade');
            $table->foreignId('fk_id_repartidor')->references('id')->on('repartidores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios');
    }
};
