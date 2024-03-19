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
        Schema::create('estatistica_downloads', function (Blueprint $table) {
            $table->id();
            $table->date('data_download');
            $table->string('pais_download', 20);
            $table->unsignedBigInteger("id_autores")->unique();
            $table->unsignedBigInteger("id_usuario")->unique();
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_autores')->references('id')->on('autors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estatistica_downloads');
    }
};
