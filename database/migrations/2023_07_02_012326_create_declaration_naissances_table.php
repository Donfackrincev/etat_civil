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
        Schema::create('declaration_naissances', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->enum('sexe', ['Masculin', 'Feminin']);
            $table->string('nationaliter');
            $table->string('lieu_naissance');
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->string('domicile')->nullable();
            $table->date('date');
            $table->foreignId('medecin_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declaration_naissances');
    }
};
