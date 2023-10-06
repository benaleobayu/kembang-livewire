<?php

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
    return redirect(route('user'));
});

Route::middleware('guest')->group(function(){
    Route::get('/user', \App\Livewire\User\Index::class)->name('user');
    Route::get('/country', \App\Livewire\Country\Index::class)->name('country');
    Route::get('/order', \App\Livewire\Order\Index::class)->name('order');
});
