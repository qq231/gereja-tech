<?php

use App\Http\Livewire\Jemaat\JemaatList;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Jemaat\JemaatCreate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', Home::class)->name('home');
Route::get('/data-jemaat', JemaatList::class)->name('data-jemaat');
Route::get('/data-jemaat/create', JemaatCreate::class)->name('data-jemaat.create');
