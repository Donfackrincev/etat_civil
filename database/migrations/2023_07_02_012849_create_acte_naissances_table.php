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
            $table->foreignId('declaration_naissance_id')->constrained(); // sous la declaration de:
                //on recupere le nom du medecin declarant dans la table declaration
             $table->foreignId('employer_id')->constrained();// nom_officier
             $table->string('centre_civil');
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
