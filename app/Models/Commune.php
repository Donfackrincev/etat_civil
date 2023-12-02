<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Commune extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];


    public function departement(){
        return $this->belongsTo(departement::class);
    }
   
}
