@extends('layouts.base')
@section('content')
    <?php
    $rdw = new \App\Models\RDW;
    $newkenteken = preg_replace('/[^a-zA-Z0-9]/m',"",$data['kenteken']);
    $kenteken =  strtoupper($newkenteken);
    $car = $rdw->getCarWithLicense($kenteken);
    $apks = $rdw->getCarAPK($kenteken);
    $power = $rdw->getCarPower($kenteken);
    ?>

    <div class="container mt-5">
        <section id="portfolio-details" class="portfolio-details">
        <div class="portfolio-description">
            <h2></h2>
        </div>
        </section>
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://images.pexels.com/photos/214574/pexels-photo-214574.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://images.pexels.com/photos/2775196/pexels-photo-2775196.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://img.freepik.com/free-photo/aesthetic-dark-wallpaper-background-neon-light_53876-128291.jpg?w=2000" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h2 class="font-weight-bold mt-3 section-heading">{{$car->merk}} | {{$car->handelsbenaming}}</h2>
                <div class="section-heading mt-3"><h4>Beschrijving.</h4></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusamus alias aspernatur culpa illum iusto porro quibusdam sapiente? Consectetur cupiditate deserunt incidunt nulla officia quas quos rerum sed suscipit!</p>
            </div>
            <div class="col-6 table-infomation">
                    <div class="section-heading"><h4>Info.</h4></div>
                    <table class=" table table-striped table-hover">
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
                            <td colspan="2">Vermogen in KW:</td>
                            <th>{{$power[0]->nettomaximumvermogen}}</th>
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
                            <td colspan="2">Kenteken:</td>
                            <th>{{$car->kenteken}}</th>
                        </tr>
                        <tr>
                            <td colspan="2">Massa Rijklaar:</td>
                            <th>{{$car->massa_rijklaar}} KG</th>
                        </tr>
                        </tbody>
                    </table>
                <div class="section-heading"><h4>Brandstof Gebruik.</h4></div>
                <table class="table table-striped table-hover">
                    <tbody>
                    <tr>
                        <td colspan="2">Gecombineerd:</td>
                        <th>{{$power[0]->brandstofverbruik_gecombineerd}}{{" l/100KM"}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Buiten stad:</td>
                        <th>{{$power[0]->brandstofverbruik_buiten}}{{" l/100KM"}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Stad:</td>
                        <th>{{$power[0]->brandstofverbruik_stad}}{{" l/100KM"}}</th>
                    </tr>
                    </tbody>
                </table>
                <div class="section-heading"><h4>Technische gegevens.</h4></div>
                <table class="table table-striped table-hover">
                    <tbody>
                    <tr>
                        <td colspan="2">Inrichting:</td>
                        <th>{{$car->inrichting}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Kleur:</td>
                        <th>{{$car->eerste_kleur}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Uitvoering:</td>
                        <th>{{$car->uitvoering}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Variant:</td>
                        <th>{{$car->variant}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Wielbasis:</td>
                        <th>{{$car->wielbasis}} MM</th>
                    </tr>
                    <tr>
                        <td colspan="2">Eerste Toelating Internationaal:</td>
                        <th><?php echo date("d-m-Y",strtotime($car->datum_eerste_toelating_dt))?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Eerste Toelating Nederland:</td>
                        <th><?php echo date("d-m-Y",strtotime($car->datum_eerste_tenaamstelling_in_nederland))?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Laaste Te naamstelling:</td>
                        <th><?php echo date("d-m-Y",strtotime($car->datum_tenaamstelling_dt))?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Aantal Wielen:</td>
                        <th>{{$car->aantal_wielen}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Aantal Deuren:</td>
                        <th>{{$car->aantal_deuren}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Max massa trekken Ongeremd:</td>
                        <th>{{$car->maximum_massa_trekken_ongeremd}} KG</th>
                    </tr>
                    <tr>
                        <td colspan="2">Max Trekmassa Geremd:</td>
                        <th>{{$car->maximum_trekken_massa_geremd}} KG</th>
                    </tr>
                    <tr>
                        <td colspan="2">Wam Verzekerd:</td>
                        <th>{{$car->wam_verzekerd}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">APK vervaldatum:</td>
                        <th><?php echo date("d-m-Y",strtotime($car->vervaldatum_apk_dt))?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Cilinderinhoud:</td>
                        <th>{{$car->cilinderinhoud}} CC</th>
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
                <div class="section-heading"><h4>Apk.</h4></div>
                @foreach($apks as $apk)
                    <table class="table table-striped table-hover">
                        <tbody>
                        <tr>
                            <td colspan="2">Datum:</td>
                            <th><?php echo date("d-m-Y",strtotime($apk->meld_datum_door_keuringsinstantie)) ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Meld tijd keuring:</td>
                            <th>{{$apk->meld_tijd_door_keuringsinstantie}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Gebrek identificatie:</td>
                            <th>{{$apk->gebrek_identificatie}} - wat (andere lijst)</td>
                        </tr>
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
@endsection
