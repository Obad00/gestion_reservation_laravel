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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('localite');
            $table->date('date_evenement');
            $table->date('date_limite_inscription');
            $table->string('nombre_place');
            $table->string('image');
            $table->foreign('association_id')->references('id')->on('associations')->onDelete('cascade');
            $table->unsignedBigInteger('association_id');

            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('categorie_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
