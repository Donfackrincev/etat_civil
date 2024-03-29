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
        Schema::create('declaration_deces', function (Blueprint $table) {
            $table->id();
            $table->string('nom_deces');
            $table->string('domicile');
            $table->date('date_deces');
            $table->string('motif_deces');
            $table->string('lieu_deces');
            $table->foreignId('medecin_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('personne_id')->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declaration_deces');
    }
};
