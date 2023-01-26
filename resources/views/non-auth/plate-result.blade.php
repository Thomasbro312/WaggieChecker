@extends('layouts.base')
@section('content')
    <?php
    $rdw = new \App\Models\RDW;
    $newkenteken = preg_replace('/[^a-zA-Z0-9]/m',"",$data['kenteken']);
    $kenteken =  strtoupper($newkenteken);
    $car = $rdw->getCarWithLicense($kenteken);
    $apks = $rdw->getCarAPK($kenteken);
    ?>
    <div class="section-header">
        <h2>Resultaat : {{$car->kenteken}} {{$car->merk}} {{$car->handelsbenaming}}</h2>
    </div>
    <div class="section-header">
        <p><b>Merk:</b> {{$car->merk}}</p>
        <p><b>Model:</b> {{$car->handelsbenaming}}</p>
        <p><b>Inrichting:</b> {{$car->inrichting}}</p>
        <p><b>Kleur:</b> {{$car->eerste_kleur}}</p>
        <p><b>Inrichting:</b> {{$car->inrichting}}</p>
        <p><b>APK vervaldatum:</b> <?php echo date("d-m-Y",strtotime($car->vervaldatum_apk_dt))?></p>
        <p><b>Aantal cilinders:</b> {{$car->aantal_cilinders}}</p>
        <p><b>Kenteken:</b> {{$car->kenteken}}</p>
        <p><b>Massa Rijklaar</b> {{$car->massa_rijklaar}} KG</p>
    </div>
    <div class="section-header">
        <h2>APK</h2>
    </div>
    <div class="section-header">
        @foreach($apks as $apk)
            <p>Datum - <?php echo date("d-m-Y",strtotime($apk->meld_datum_door_keuringsinstantie)) ?></p>
            <p>Meld tijd keuring - {{$apk->meld_tijd_door_keuringsinstantie}}</p>
            <p>Gebrek identificatie - {{$apk->gebrek_identificatie}} - wat (andere lijst)</p> <br>
        @endforeach
    </div>
@endsection
