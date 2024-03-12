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
        Schema::create('palavra_chaves', function (Blueprint $table) {
            $table->id();
            $table->string('palavrachave', 10);
            $table->unsignedBigInteger("id_monografia");
            $table->unsignedBigInteger("id_artigo_cientifico");
            $table->timestamps();

            $table->foreign('id_monografia')->references('id')->on('monografias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_artigo_cientifico')->references('id')->on('artigo_cintificos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('palavra_chaves');
    }
};
