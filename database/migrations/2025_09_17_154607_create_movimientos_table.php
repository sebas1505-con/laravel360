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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_movimiento');
            $table->date('cantidad');
            $table->string('observacion');
            $table->date('dinero_gastado');
            $table->date('dinero_ganado');
            $table->date('precio_producto_venta');
            $table->foreignId('fk_id_inventario')->references('id')->on('inventarios')->onDelete('cascade');
            $table->foreignId('fk_id_repartidor')->references('id')->on('repartidores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
