<?php

use App\Http\Controllers\formController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\padronController;
use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/home', [homeController::class, 'index']);

    Route::get('/registros/form', [formController::class, 'index']);
    Route::post('/registros/form', [formController::class, 'store'])->name('form.save');
    Route::get('/registros/padron/{id}/padronAct', [formController::class,'edit']);
    Route::put('/registros/padron/{id}', [formController::class,'update']);
    Route::delete('/registros/form/{id}', [formController::class, 'destroy']);


    Route::get('/registros/padron', [padronController::class, 'index']);
    Route::get('/registros/padron_pdf', [padronController::class,'pdf']);
    Route::get('/registros/padron_excel',[padronController::class,'excel']);


    Route::get('/registros/form/municipio/{idMunicipio}/poblacion', [formController::class, 'getPoblaciones']);
    });

require __DIR__.'/auth.php';
