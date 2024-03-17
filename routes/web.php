<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[WelcomController::class,'index']);
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');


//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::controller(UserController::class)->prefix('/user')->group( function(){
        Route::get('/', 'index')->middleware('permission:users-read');
        Route::get('/create', 'create')->middleware('permission:users-create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit')->middleware('permission:users-update');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy')->middleware('permission:users-delete');
        Route::get('/{id}', 'show')->middleware('permission:users-show');
    });

    Route::controller(FournisseurController::class)->prefix('/fournisseur')->group( function(){
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy');
        Route::get('/{id}', 'show');
    });

    Route::controller(CategorieController::class)->prefix('/categorie')->group( function(){
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('', 'store');
        Route::get('/{id}/edit', 'edit');
        Route::patch('/{id}', 'update');
        Route::delete('/delete/{id}', 'destroy');
        Route::get('/{id}', 'show');
    });



});

require __DIR__.'/auth.php';


Route::controller(ProduitController::class)->prefix('/produit')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create')->middleware('permission:produit-create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit')->middleware('permission:produit-update');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy')->middleware('permission:produit-delete');
    Route::get('/{id}', 'show');
});
Route::get('add_cart/{id}', [ProduitController::class, 'addTocart'])->name('add_to_cart');



Route::controller(CommandeController::class)->prefix('/commande')->group( function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::post('', 'store');
    Route::get('/{id}/edit', 'edit');
    Route::patch('/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
    Route::get('/{id}', 'show');
});

