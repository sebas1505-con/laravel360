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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->date('stock');
            $table->decimal('costo_producto_unitario', 10, 2);
            $table->string('estado_producto');
            $table->foreignId('fk_id_producto')->references('id')->on('productos')->onDelete('cascade');
            $table->foreignId('fk_id_administrador')->references('id')->on('administradores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
