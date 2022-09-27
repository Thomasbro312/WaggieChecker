<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        return view('carCreateForm');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk' => 'required',
            'handelsbenaming' => 'required',
            'vermogen_in_pk' => 'required',
            'vermogen_in_kw' => 'required',
            'kenteken' => 'required'
        ]);

        $car = new CarModel;

        $car->merk = $request->merk;
        $car->handelsbenaming = $request->handelsbenaming;
        $car->vermogen_in_pk = $request->vermogen_in_pk;
        $car->vermogen_in_kw = $request->vermogen_in_kw;
        $car->kenteken = $request->kenteken;
        $car->auto_rook = $request->auto_rook;

        CarModel::create($request->all());

        return redirect()->route('sellCar');
    }
}
