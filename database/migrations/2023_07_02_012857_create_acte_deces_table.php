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
        Schema::create('acte_deces', function (Blueprint $table) {
            $table->id();
            $table->string('nom_decedes');
            $table->string('lieu_deces');
            $table->integer('age_decedes');
            $table->string('domicile_decedes');
            $table->string('nom_pere');
            $table->string('demeur_pere');
            $table->string('nom_mere');
            $table->string('demeur_mere');
            $table->string('date_fabrication');
            $table->foreignId('declaration_deces_id')->constrained()->onDelete('cascade');
            $table->foreignId('employer_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acte_deces');
    }
};
