<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::middleware(['auth', 'verified'])->get('/dashboard', function() {
    return view('dashboard.index');
})->name('dashboard.index');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::resource('profile', ProfileController::class)->only(['index']);
});
