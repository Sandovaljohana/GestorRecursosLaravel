<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('usuarios', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombre')->nullable(false);
        $table->string('correo')->unique()->nullable(false);
        $table->string('palabra_secreta')->nullable(false);
        $table->boolean('administrador')->default(false);
        $table->timestamps();
    });

    Schema::create('archivos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombre_original')->nullable(false);
        $table->string('nombre_real')->unique()->nullable(false);
        $table->date('fecha_creacion')->nullable(false);
        $table->bigInteger('tamanio_bytes')->unsigned()->nullable(false);
        $table->bigInteger('id_usuario')->unsigned()->nullable(false);
        $table->enum('tipo', ['jpg', 'pdf', 'pptx', 'other'])->default('other');
        $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
        $table->timestamps();
    });
 Schema::create('archivos_compartidos', function (Blueprint $table) {
        $table->string('hash')->primary();
        $table->bigInteger('id_archivo')->unsigned()->nullable(false);
        $table->bigInteger('id_usuario_compartido')->unsigned()->nullable(false);
        $table->foreign('id_archivo')->references('id')->on('archivos')->onDelete('cascade');
        $table->foreign('id_usuario_compartido')->references('id')->on('usuarios')->onDelete('cascade');
    });
}
public function down()
{
    Schema::dropIfExists('archivos_compartidos');
    Schema::dropIfExists('archivos');
    Schema::dropIfExists('usuarios');
}
};