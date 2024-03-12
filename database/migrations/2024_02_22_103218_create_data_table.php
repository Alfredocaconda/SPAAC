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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->date('data_submissao');
            $table->date('data_avaliacao');
            $table->date('data_publicacao');
            $table->unsignedBigInteger("id_artigo_cientifico");
            $table->unsignedBigInteger("id_monografia");
            $table->timestamps();

            $table->foreign('id_monografia')->references('id')->on('monografias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_artigo_cientifico')->references('id')->on('artigo_cintifico')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
