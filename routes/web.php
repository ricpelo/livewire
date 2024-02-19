<?php

use App\Livewire\Contador;
use App\Livewire\Dispara;
use App\Livewire\Formulario;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/contador', Contador::class);
Route::get('/formulario', Formulario::class);
Route::get('/mezclar', function() {
    return view('mezclar');
});

Route::get('/disparar', function () {
    return view('disparaescucha');
});

require __DIR__.'/auth.php';
