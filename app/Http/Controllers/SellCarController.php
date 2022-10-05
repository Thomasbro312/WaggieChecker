<?php

namespace App\Http\Controllers;

use App\Models\CarStorage;
use App\Models\RDW;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class SellCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = CarStorage::all();
        return view('welcome', ['cars'=> $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('carCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $car = new CarStorage();

        $car->merk = $request->merk;
        $car->handelsbenaming = $request->handelsbenaming;
        $car->vermogen_in_pk = $request->vermogen_in_pk;
        $car->vermogen_in_kw = $request->vermogen_in_kw;
        $car->auto_rook = $request->auto_rook;
        $car->kenteken = $request->kenteken;
        $car->beschrijving = $request->beschrijving;
        $car->prijs = $request->prijs;

        $car->save();


        return redirect()->route('car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rawCar = CarStorage::findOrFail($id);
        return view('carView')->with(compact('rawCar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
