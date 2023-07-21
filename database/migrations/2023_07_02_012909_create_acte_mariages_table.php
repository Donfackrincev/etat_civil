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
        Schema::create('acte_mariages', function (Blueprint $table) {
            $table->id();
            $table->string('nom_centre');
            $table->enum('systeme_matrimoniale', ['polygamie', 'Monogami']);
            $table->enum('type_bien', ['commin', 'Separer']);
            $table->foreignId('publication_id')->constrained();
            $table->foreignId('personne_id')->constrained();
            $table->foreignId('employer_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acte_mariages');
    }
};
