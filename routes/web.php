<?php

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
    return view('welcome');
});

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'verified']], function () {
    Route::view('/', 'dashboard')->name('index');

    Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
        Route::resource('schema', \App\Http\Controllers\SchemaController::class)->except('show');
        Route::resource('user', \App\Http\Controllers\UserController::class)->except('show');
    });

    Route::group(['prefix' => 'transaction', 'as' => 'transaction.'], function () {
        Route::resource('participant', \App\Http\Controllers\ParticipantController::class)->only(['index', 'destroy']);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
