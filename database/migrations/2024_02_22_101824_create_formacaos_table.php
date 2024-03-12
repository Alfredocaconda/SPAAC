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
        Schema::create('formacaos', function (Blueprint $table) {
            $table->id();
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->string('instituicao_formacao', 100);
            $table->string('curso_formacao', 50);
            $table->unsignedBigInteger("id_autores");
            $table->timestamps();

            $table->foreign('id_autores')->references('id')->on('autors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formacaos');
    }
};
