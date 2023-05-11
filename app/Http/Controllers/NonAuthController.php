<?php

namespace App\Http\Controllers;

//use App\Models\CarStorage;
use Illuminate\Http\Request;

class NonAuthController extends Controller
{

    public function index() {
//        $cars = CarStorage::all()->count();
//        $apks = 10;
        return view('non-auth.homepage');
    }

    public function aboutus(){
        return view('non-auth.aboutus');
    }

    public function aanbod(){
        $cars = CarStorage::all();
        return view('non-auth.cars')->with(compact('cars'));
    }

    public function aanbodCar(Request $storage){
        $car = CarStorage::findOrFail($storage->id);
        return view('non-auth.car-info')->with(compact('car'));
    }

    public function contact(){
        return view('non-auth.contact');
    }

    public function debug(){
        return view('debug');
    }

    public function kentekenResult(){
        return view('non-auth.plate-result');
    }

    public function pdebug(){
        return view('portfoliodebug');
    }
    public function comingsoon(){
        return view('non-auth.comingsoon');
    }
}
