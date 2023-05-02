<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NonAuthController;
use App\Http\Controllers\RDWController;
use App\Http\Controllers\SellCarController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get("/logout",function (){
   Auth::logout();
   return redirect()->route('homepage');
})->name('logout');
