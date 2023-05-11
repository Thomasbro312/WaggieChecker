<?php

namespace App\Http\Controllers;

use App\Models\RDW;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function plateCheck(Request $request)
    {
        $rdw = new RDW();
        $newkenteken = preg_replace('/[^a-zA-Z0-9]/m', "", $request->kenteken);
        $kenteken = strtoupper($newkenteken);
        $car = $rdw->getCarWithLicense($kenteken);
        $apks = $rdw->getCarAPK($kenteken);
        $power = $rdw->getCarPower($kenteken);
        return view('non-auth.plate-result')->with(compact('kenteken', 'car', 'apks','power'));
    }

}
