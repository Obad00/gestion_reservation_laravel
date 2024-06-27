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
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->string('logo');
            $table->string('adresse');
            $table->integer('contact');
            $table->string('secteur');
            $table->string('ninea');
            $table->date('date_creation_association');
            $table->boolean('etat')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // $table->dropForeign('associations_user_id_foreign');
        // $table->dropColumn('user_id');
        Schema::dropIfExists('associations');
    }
};
