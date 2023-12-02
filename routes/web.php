<?php

use App\Http\Controllers\ActedecesController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\DeclarationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\DeclarationdecesController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemoinageController;
use App\Http\Controllers\NaissanceController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('/liste-commune', [HomeController::class, 'commune'])->middleware(['auth', 'verified'])->name('liste-commune');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(RegionController::class)->prefix('/region')->group( function(){
        Route::get('/', 'index')->middleware('permission:regions-read');
        Route::get('/create', 'create')->middleware('permission:regions-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:regions-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:regions-delete');
        Route::get('/{id}', 'show');
    });

    Route::controller(CommuneController::class)->prefix('/commune')->group( function(){
        Route::get('/', 'index')->middleware('permission:communes-read');
        Route::get('/create', 'create')->middleware('permission:communes-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:communes-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:communes-delete');
        Route::get('/{id}', 'show');
    });


    Route::controller(DepartementController::class)->prefix('/departement')->group( function(){
        Route::get('/', 'index')->middleware('permission:departements-read');
        Route::get('/create', 'create')->middleware('permission:departements-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:departements-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:departements-delete');
        Route::get('/{id}', 'show')->middleware('permission:departements-show');
    });

    Route::controller(PersonneController::class)->prefix('/personne')->group( function(){
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:personnes-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:personnes-delete');
        Route::get('/{id}', 'show')->middleware('permission:personnes-show');
    });

    Route::controller(UserController::class)->prefix('/user')->group( function(){
        Route::get('/', 'index')->middleware('permission:users-read');
        Route::get('/create', 'create')->middleware('permission:users-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:users-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:users-delete');
        Route::get('/{id}', 'show')->middleware('permission:users-show');
    });


    Route::controller(MedecinController::class)->prefix('/medecin')->group( function(){
        Route::get('/', 'index')->middleware('permission:medecins-read');
        Route::get('/create', 'create')->middleware('permission:medecins-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:medecins-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:medecins-delete');
        Route::get('/{id}', 'show')->middleware('permission:medecins-show');
    });

    Route::controller(UserController::class)->prefix('/users')->group( function(){
        Route::get('/', 'index')->middleware('permission:users-read');
        Route::get('/create', 'create')->middleware('permission:users-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:users-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:users-delete');
        Route::get('/{id}', 'show')->middleware('permission:users-show');
    });

    Route::controller(DeclarationController::class)->prefix('/declaration')->group( function(){
        Route::get('/', 'index');
        Route::get('/create', 'create')->middleware('permission:declaration_naissances-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:declaration_naissances-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:declaration_naissances-delete');
        Route::get('/{id}', 'show')->middleware('permission:declaration_naissances-show');

    });


    Route::controller(DepartementController::class)->prefix('/departement')->group( function(){
        Route::get('/', 'index')->middleware('permission:departements-read');
        Route::get('/create', 'create')->middleware('permission:departements-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:departements-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:departements-delete');
        Route::get('/{id}', 'show')->middleware('permission:departements-show');
    });

    Route::controller(EmployerController::class)->prefix('/employer')->group( function(){
        Route::get('/', 'index')->middleware('permission:employers-read');
        Route::get('/create', 'create')->middleware('permission:employers-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:employers-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:employers-delete');
        Route::get('/{id}', 'show')->middleware('permission:employers-show');
    });

    Route::controller(DocumentationController::class)->prefix('/documentation')->group( function(){
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy');
        Route::get('/{id}', 'show');
    });

    Route::controller(TemoinageController::class)->prefix('/temoinage')->group( function(){
        Route::get('/', 'index')->middleware('permission:temoinages-read');
        Route::get('/create', 'create')->middleware('permission:temoinages-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:temoinages-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:temoinages-delete');
        Route::get('/{id}', 'show')->middleware('permission:temoinages-show');
    });

    Route::controller(NaissanceController::class)->prefix('/naissance')->group( function(){
        Route::get('/', 'index')->middleware('permission:acte_naissances-read');
        Route::get('/create', 'create')->middleware('permission:acte_naissances-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:acte_naissances-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:acte_naissances-delete');
        Route::get('/{id}', 'show')->middleware('permission:acte_naissances-show');
    });
    Route::post('/valider_acte', [NaissanceController::class, 'valider_acte']);

    Route::controller(PublicationController::class)->prefix('/publication')->group(function(){
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy');
        Route::get('/{id}', 'show');
    });

    Route::controller(DeclarationdecesController::class)->prefix('/declarationdeces')->group( function(){
        Route::get('/', 'index')->middleware('permission:declaration_deces-read');
        Route::get('/create', 'create')->middleware('permission:declaration_deces-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:declaration_deces-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:declaration_deces-delete');
        Route::get('/{id}', 'show')->middleware('permission:declaration_deces-show');
    });

    Route::controller(ActedecesController::class)->prefix('/deces')->group( function(){
        Route::get('/', 'index')->middleware('permission:acte_deces-read');
        Route::get('/create', 'create')->middleware('permission:acte_deces-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:acte_deces-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:acte_deces-delete');
        Route::get('/{id}', 'show')->middleware('permission:acte_deces-show');
    });


});

require __DIR__.'/auth.php';




