<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KentekenChecker extends Controller
{
    public function index(){
        $users = DB::select('select * from student_details');
        return view('stud_view',['users'=>$users]);
}
