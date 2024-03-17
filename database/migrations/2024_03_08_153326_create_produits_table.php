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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('libelle');
            $table->string('image');
            $table->integer('Quantite');
            $table->integer('pritunitaire');
            $table->integer('prixtotal');
            $table->foreignId('fournisseur_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
