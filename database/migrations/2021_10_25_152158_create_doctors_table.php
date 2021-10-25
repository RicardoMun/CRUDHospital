<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('rut', 100)->nullable()->default('text');
            $table->string('nombre_doctor', 100)->nullable()->default('text');
            $table->string('apellidos', 100)->nullable()->default('text');
            $table->string('email', 100)->nullable()->default('text');
            $table->string('direccion', 100)->nullable()->default('text');
            $table->enum('especialidad', ['Cardiologo', 'Cirujano', 'Neurologo'])->nullable()->default('Neurologo');
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
        Schema::dropIfExists('doctors');
    }
}
