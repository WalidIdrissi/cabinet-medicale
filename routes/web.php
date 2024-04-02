<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\TraitementController;
use App\Http\Controllers\TypeTraitementController;
use App\Http\Controllers\RendezVousMedicaleController;
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
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('patients',PatientController::class);
    Route::resource('rendez_vous_medicales', RendezVousMedicaleController::class)->parameters([
        'rendez_vous_medicale' => 'rendez_vous_medicale' // Définir le nom du paramètre utilisé dans la route
    ]);
    Route::resource('type_traitements',TypeTraitementController::class);
    Route::resource('traitements', TraitementController::class)->parameters([
        'traitement' => 'traitement' // Définir le nom du paramètre utilisé dans la route
    ]);;
    
}


);



