<?php

namespace App\Http\Controllers;

use App\Models\ActeNaissance;
use App\Models\Commune;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index()
  {
    $commune = Commune::count();
    $naissance = ActeNaissance::count();
    return view('dashboard', compact('commune','naissance'));
  }
}
