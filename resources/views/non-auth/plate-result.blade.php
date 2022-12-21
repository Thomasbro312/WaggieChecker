@extends('layouts.base')
@section('content')
    <?php
    $rdw = new \App\Models\RDW;
    $kenteken =  strtoupper($data['kenteken']);
    $car = $rdw->getCarWithLicense($kenteken);
    $apks = $rdw->getCarAPK($kenteken);
    ?>
    <h3>Specificaties</h3>
    <div class="gridcontainer-c">
        <p><b>Merk:</b> {{$car->merk}}</p>
        <p><b>Model:</b> {{$car->handelsbenaming}}</p>
        <p><b>Kleur:</b> {{$car->eerste_kleur}}</p>
        <p><b>Inrichting:</b> {{$car->inrichting}}</p>
        <p><b>APK vervaldatum:</b> {{$car->vervaldatum_apk_dt}}</p>
        <p><b>Aantal cilinders:</b> {{$car->aantal_cilinders}}</p>
        <p><b>Kenteken:</b> {{$car->kenteken}}</p>
        <p><b>Massa Rijklaar</b> {{$car->massa_rijklaar}} KG</p>
    </div>
    <h3>APK</h3>
    <div class="gridcontainer-c">
        @foreach($apks as $apk)
            <p>Datum - {{$apk->meld_datum_door_keuringsinstantie_dt}}</p>
            <p>Meld datum keuring - {{$apk->meld_datum_door_keuringsinstantie}}</p>
            <p>Meld tijd keuring - {{$apk->meld_tijd_door_keuringsinstantie}}</p>
            <p>Gebrek identificatie - {{$apk->gebrek_identificatie}} - wat (andere lijst)</p>
        @endforeach
    </div>
@endsection
