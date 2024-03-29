<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclarationNaissance extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function medecin(){
        return $this->belongsTo(medecin::class);
    }

    public function temoinage(){
        return $this->belongsTo(Temoinage::class);
    }
}
