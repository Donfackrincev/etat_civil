<?php

namespace App\Http\Controllers;

use App\Models\ActeDeces;
use App\Models\ActeNaissance;
use App\Models\Commune;
use App\Models\DeclarationDeces;
use App\Models\DeclarationNaissance;
use App\Models\Employer;
use App\Models\Medecin;
use App\Models\Personne;
use App\Models\Region;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function commune(){
        $medecin =Medecin::count();
        $personne = Personne::count();
        $declaration = DeclarationNaissance::count();
        $commune = Commune::count();
        $region = Region::count();
        $naissance=ActeNaissance::count();
        $deces = ActeDeces::count();
        $declarationdeces = DeclarationDeces::count();
        $employer = Employer::count();

        return view('home.commune', compact('commune','naissance',
        'declaration','personne','medecin','region',
    'deces','declarationdeces','employer'));
        
    }
}
