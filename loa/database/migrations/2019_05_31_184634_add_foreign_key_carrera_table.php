<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyCarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carrera', function (Blueprint $table) {
            //
            $table->bigInteger('id_departamento')->unsigned()->nullable();
            $table->foreign('id_departamento')
                    ->references('id')->on('departamento')
                    ->onDelete('cascade');
                    
            $table->bigInteger('id_coordinador_docente');
            $table->foreign('id_coordinador_docente')
                            ->references('id')->on('coordinador_docente')
                            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carrera', function (Blueprint $table) {
            //
        });
    }
}
