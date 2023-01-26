@extends('layouts.base')
@section('content')
    <?php
    $rdw = new \App\Models\RDW;
    $newkenteken = preg_replace('/[^a-zA-Z0-9]/m',"",$data['kenteken']);
    $kenteken =  strtoupper($newkenteken);
    $car = $rdw->getCarWithLicense($kenteken);
    $apks = $rdw->getCarAPK($kenteken);
    ?>

    <div class="container">
        <section id="portfolio-details" class="portfolio-details">
            <div class="portfolio-description">
                <h2>Resultaat : {{$kenteken}} {{$car->merk}} {{$car->handelsbenaming}}</h2>
            </div>
        </section>
        <div class="row">
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusamus alias aspernatur culpa illum iusto porro quibusdam sapiente? Consectetur cupiditate deserunt incidunt nulla officia quas quos rerum sed suscipit!</p>
            </div>
            <div class="col-6">
                <div class="section-heading"><h3>Info.</h3></div>
                <table class="table table-striped table-hover">
                    <tbody>
                    <tr>
                        <td colspan="2">Merk:</td>
                        <th>{{$car->merk}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Model:</td>
                        <th>{{$car->handelsbenaming}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Inrichting:</td>
                        <th>{{$car->inrichting}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Kleur:</td>
                        <th>{{$car->eerste_kleur}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">APK vervaldatum:</td>
                        <th><?php echo date("d-m-Y",strtotime($car->vervaldatum_apk_dt))?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Aantal cilinders:</td>
                        <th>{{$car->aantal_cilinders}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Kenteken:</td>
                        <th>{{$car->kenteken}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Massa Rijklaar:</td>
                        <th>{{$car->massa_rijklaar}} KG</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{--        <h2>APK</h2>--}}
    {{--    </div>--}}
    {{--    <div class="section-header">--}}
    {{--        @foreach($apks as $apk)--}}
    {{--            <p>Datum - <?php echo date("d-m-Y",strtotime($apk->meld_datum_door_keuringsinstantie)) ?></p>--}}
    {{--            <p>Meld tijd keuring - {{$apk->meld_tijd_door_keuringsinstantie}}</p>--}}
    {{--            <p>Gebrek identificatie - {{$apk->gebrek_identificatie}} - wat (andere lijst)</p> <br>--}}
    {{--        @endforeach--}}
    {{--    </div>--}}
@endsection
