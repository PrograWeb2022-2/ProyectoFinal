<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyectofinal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero',function(Blueprint $table){
            $table ->id();
            $table -> string('descripcion');
            $table -> timestamps();
        });

        Schema::create('idioma',function(Blueprint $table){
            $table ->id();
            $table -> string('descripcion');
            $table -> timestamps();
        });

        Schema::create('autor',function(Blueprint $table){
            $table ->id();
            $table -> string('nombre');
            $table -> string('apellido');
            $table -> string('nacionalidad');
            $table -> timestamps();
        });

        Schema::create('editorial',function(Blueprint $table){
            $table ->id();
            $table -> string('descripcion');
            $table -> string('ubicacion');
            $table -> string('telefono');
            $table -> timestamps();
        });

        Schema::create('proovedor',function(Blueprint $table){
            $table ->id();
            $table -> string('nombre');
            $table -> string('apellido');
            $table -> integer('celular');
            $table -> string('nit');
            $table -> timestamps();
        });

        Schema::create('estado',function(Blueprint $table){
            $table ->id();
            $table -> string('descripcion');
            $table -> timestamps();
        });

        Schema::create('cliente',function(Blueprint $table){
            $table ->id();
            $table -> string('nombre');
            $table -> string('apellido');
            $table -> integer('celular');
            $table -> timestamps();
        });

        Schema::create('libro',function(Blueprint $table){
            $table ->id();
            $table -> string('Nombre');
            $table -> integer('Paginas');
            $table -> unsignedBigInteger('autor_id');
            $table -> unsignedBigInteger('idioma_id');
            $table -> unsignedBigInteger('genero_id');
            $table -> unsignedBigInteger('estado_id');
            $table -> unsignedBigInteger('editorial_id');
            $table -> unsignedBigInteger('proovedor_id');
            $table -> foreign('autor_id')-> references('id')->on('autor');
            $table -> foreign('idioma_id')-> references('id')->on('idioma');
            $table -> foreign('genero_id')-> references('id')->on('genero');
            $table -> foreign('estado_id')-> references('id')->on('estado');
            $table -> foreign('editorial_id')-> references('id')->on('editorial');
            $table -> foreign('proovedor_id')-> references('id')->on('proovedor');
            $table -> timestamps();
        });

        Schema::create('prestamo',function(Blueprint $table){
            $table ->id();
            $table -> unsignedBigInteger('libro_id');
            $table -> unsignedBigInteger('cliente_id');
            $table -> integer('costo');
            $table -> foreign('libro_id')-> references('id')->on('libro');
            $table -> foreign('cliente_id')-> references('id')->on('cliente');
            $table -> timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
