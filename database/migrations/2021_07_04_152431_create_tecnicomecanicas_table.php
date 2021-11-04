<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnicomecanicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnicomecanicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('empleado_id')->constrained();
            $table->foreignId('vehiculo_id')->constrained();
            $table->foreignId('cda_id')->constrained();
            $table->string('no_control');
            $table->string('numero_control');
            $table->string('consecutivo_runt');
            $table->date('fecha_expedicion');
            $table->date('fecha_vencimiento');
            $table->string('certificado_acreditacion');
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
        Schema::dropIfExists('tecnicomecanicas');
    }
}
