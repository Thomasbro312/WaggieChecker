<?php

use App\Http\Controllers\NonAuthController;
use App\Http\Controllers\RDWController;
use App\Http\Controllers\SellCarController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';

Route::get('/',[NonAuthController::class,'index'])->name('homepage');

Route::post('/platecheck',[RDWController::class,'plateCheck'])->name('kenteken.plateCheck');
