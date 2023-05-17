<?php

namespace App\Http\Controllers;

use App\Models\RDW;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DataController extends Controller
{
    public function plateCheck(Request $request)
    {
        $kenteken = strtoupper(preg_replace('/[^a-zA-Z0-9]/m', "", $request->kenteken));
        $data = [];
        if(empty(Cache::get($kenteken))){
            $rdw = new RDW();

            $data['apks'] = $rdw->getCarAPK($kenteken);;
            $data['car'] = $rdw->getCarWithLicense($kenteken);
            $data['power'] = $rdw->getCarPower($kenteken)[0];
            Cache::put($kenteken, $data);
        } else {
            $data[] = Cache::get($kenteken);
        }

        $data = $data[0];
        return view('non-auth.plate-result')->with(compact('kenteken','data'));
    }

}
