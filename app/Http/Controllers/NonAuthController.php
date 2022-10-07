<?php

namespace App\Http\Controllers;

use App\Models\CarStorage;
use Illuminate\Http\Request;

class NonAuthController extends Controller
{
    public function redirect(){
        return redirect()->route("homepage");
    }

    public function index() {
        $cars = CarStorage::all()->count();
        $apks = 10;
        return view('non-auth.homepage')->with(compact('cars','apks'));
    }

    public function aboutus(){
        return view('non-auth.aboutus');
    }

    public function aanbod(){
        $cars = CarStorage::all();
        return view('non-auth.cars')->with(compact('cars'));
    }

    public function contact(){
        return view('non-auth.contact');
    }

    public function debug(){
        return view('debug');
    }

}
