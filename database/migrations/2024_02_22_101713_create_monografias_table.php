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
        Schema::create('monografias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_monografia', 100);
            $table->string('instituicao_ensino', 50);
            $table->string('resumo', 255);
            $table->unsignedBigInteger("id_categoria");
            $table->unsignedBigInteger("id_autores");
            $table->timestamps();
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_autores')->references('id')->on('autors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monografias');
    }
};
