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
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('numero')->nullable();
            $table->string('email')->nullable();
            $table->string('domicile')->nullable();
            $table->string('cni')->nullable(); 
            $table->string('nationaliter');
            $table->string('profession')->nullable();
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->enum('sexe', ['Masculin', 'Feminin']);
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnes');
    }
};
