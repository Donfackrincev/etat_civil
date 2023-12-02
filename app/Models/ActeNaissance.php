<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ActeNaissance extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];
    public function declaration_naissance(){
        return $this->belongsTo(declaration_naissance::class);
    }

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function commune(){
        return $this->belongsTo(Commune::class);
    }
    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
}
