<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('empleado_id')->constrained();
            $table->string('tipo_vehiculo');
            $table->string('placa');
            $table->string('marca');
            $table->string('linea');
            $table->string('modelo');
            $table->string('cilindrada')->nullable();
            $table->string('color');
            $table->string('servicio');
            $table->string('clase_vehiculo');
            $table->string('tipo_carroceria')->nullable();
            $table->string('combustible')->nullable();
            $table->string('capacidad');
            $table->string('no_motor')->nullable();
            $table->string('no_vin')->nullable();
            $table->string('no_serie')->nullable();
            $table->string('chasis')->nullable();
            $table->string('blindaje')->nullable();
            $table->string('potencia')->nullable();
            $table->string('puertas')->nullable();
            $table->date('fecha_matricula')->nullable();
            $table->date('fecha_vencimiento')->nullable();
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
        Schema::dropIfExists('vehiculos');
    }
}
