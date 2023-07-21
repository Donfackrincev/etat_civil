<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeMariage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function publication(){
        return $this->belongsTo(publication::class);
    }
    public function personne(){
        return $this->hasMany(Personne::class);
    }
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
