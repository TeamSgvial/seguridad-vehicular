<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('empleado_id')->constrained();
            $table->foreignId('contrato_id')->constrained('tipo_contratos');
            $table->foreignId('eps_id')->constrained();
            $table->foreignId('arl_id')->constrained();
            $table->foreignId('afp_id')->constrained();
            $table->foreignId('cesantia_id')->constrained();
            $table->string('codigo');
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso')->nullable();
            $table->string('no_personas');
            $table->string('profesion');
            $table->string('cargo');
            $table->string('educacion');
            $table->integer('salario')->nullable();
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
        Schema::dropIfExists('contratos');
    }
}
