<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function account(){
        return view('authable.user.index');
    }

    public function editAccount(){
        return view('authable.user.edit');
    }

    public function updateAccount(Request $request){
        $user = Auth::user();
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'omgeving'=>$request->omgeving
        ]);

        $user->save();

        return redirect()->route('account');
    }
}
