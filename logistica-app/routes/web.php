<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransportadoraController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //Home
    Route::get('/home', function(){
        return view('home');
    });

    Route::post('/user_logout', [Auth::class, 'destroy'])->name('logout');


    //Transportadoras
    Route::get('transportadoras/', [TransportadoraController::class, 'index'])->name('transportadora.index');
    Route::get('transportadoras/create', [TransportadoraController::class, 'create'])->name('transportadora.create');
    Route::post('transportadoras/store', [TransportadoraController::class, 'store'])->name('transportadora.store');
    Route::get('transportadoras/show/{transportadora}', [TransportadoraController::class, 'show'])->name('transportadora.show');
    Route::get('transportadoras/edit/{transportadora}', [TransportadoraController::class, 'edit'])->name('transportadora.edit');
    Route::put('transportadoras/update/{transportadora}', [TransportadoraController::class, 'update'])->name('transportadora.update');
    Route::any('transportadoras/delete/{transportadora}', [TransportadoraController::class, 'destroy'])->name('transportadora.destroy');


});

require __DIR__.'/auth.php';
