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
        Schema::create('artigo_cintificos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->string('resumo', 255);
            $table->string('volume', 10);
            $table->unsignedBigInteger("id_categoria");
            $table->unsignedBigInteger("id_autores");
            $table->unsignedBigInteger("id_data");
            $table->unsignedBigInteger("id_palavra_chave");
            $table->timestamps();

         
            $table->foreign('id_palavra_chave')->references('id')->on('palavra_chaves')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_data')->references('id')->on('data')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_autores')->references('id')->on('autors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artigo_cintificos');
    }
};
