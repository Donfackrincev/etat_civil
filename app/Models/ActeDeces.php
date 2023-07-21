<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeDeces extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function declaration_deces(){
        return $this->belongsTo(declaration_deces::class);
    }

    public function personne(){
        return $this->belongsTo(Personne::class);
    }
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
