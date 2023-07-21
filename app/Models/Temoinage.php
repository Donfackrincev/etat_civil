<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoinage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function personne(){
        return $this->belongsTo(Personne::class);
    }

    public function declaration_naissance(){
        return $this->belongsTo(declarationNaissance::class);
    }
}
