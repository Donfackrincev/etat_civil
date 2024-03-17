<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable =[
      'nom',
        'libelle',
        'image',
         'Quantite',
        'pritunitaire',
         'prixtotal'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function fournisseur(){
        return $this->belongsTo(Fournisseur::class);
    }
}
