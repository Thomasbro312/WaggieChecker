<?php

use App\Http\Controllers\NonAuthController;
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

Route::get('/',[NonAuthController::class,'redirect'])->name('redirect');
Route::get('/homepage',[NonAuthController::class,'index'])->name('homepage');
Route::get('/over-ons',[NonAuthController::class,'aboutus'])->name('aboutus');
Route::get('/aanbod',[NonAuthController::class,'aanbod'])->name('aanbod');
Route::get('/aanbod/{id}',[NonAuthController::class,'aanbodCar'])->name('aanbod.car');

Route::get('/contact',[NonAuthController::class,'contact'])->name('contact');

Route::get('/debug',[NonAuthController::class,'debug']);
Route::get('/pdebug',[NonAuthController::class,'pdebug']);


// AUTH CONTROLLER


//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/car',function (){
//    return view("carView");
//});
//Route::get('/car2',function (){
//    return view("carView2");
//});

Route::group(['prefix' => 'car'], function(){
    Route::resource('car', SellCarController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get("/logout",function (){
   Auth::logout();
   return redirect()->route('homepage');
})->name('logout');
