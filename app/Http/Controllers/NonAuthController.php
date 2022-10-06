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
        return view('homepage');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function aanbod(){
        $cars = CarStorage::all();
        return view('cars')->with(compact('cars'));
    }

    public function debug(){
        return view('debug');
    }

}
