<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeNaissance extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function declaration_naissance(){
        return $this->belongsTo(declaration_naissance::class);
    }
    public function personne(){
        return $this->belongsTo(Personne::class);
    }
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
