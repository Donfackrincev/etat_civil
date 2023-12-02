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
        Schema::create('acte_naissances', function (Blueprint $table) {
            $table->id();
            $table->string('nom_enfant');
            $table->string('date_naissance');
            $table->string('lieu_naissance');
            $table->string('nom_enfant1');
            $table->enum('sexe',['Masculin','Feminin']);
            $table->string('nom_pere');
            $table->string('lieu_naissance_pere');
            $table->date('naissance_pere');
            $table->string('domicile');
            $table->string('profession_pere');
            $table->string('nom_mere');
            $table->string('lieu_naissance_mere');
            $table->date('naissance_mere');
            $table->string('Domiciliere_mere');
            $table->string('profession_mere');
            $table->string('dresser_le');
            $table->string('email');
            $table->string('status');
            $table->foreignId('declaration_naissance_id')->constrained()->onDelete('cascade');
             $table->foreignId('employer_id')->constrained()->onDelete('cascade');
             $table->foreignId('commune_id')->constrained()->onDelete('cascade');
             $table->foreignId('region_id')->constrained()->onDelete('cascade');
             $table->foreignId('departement_id')->constrained()->onDelete('cascade');
             $table->string('assistant_officier');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acte_naissances');
    }
};
