<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('empleado_id')->constrained();
            $table->foreignId('vehiculo_id')->constrained();
            $table->foreignId('ciudad_id')->constrained();
            $table->string('poliza');
            $table->string('codigo_aseguradora');
            $table->string('clave_producto');
            $table->date('fecha_expedicion');
            $table->date('fecha_vencimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soats');
    }
}
