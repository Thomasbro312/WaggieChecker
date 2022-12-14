<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <meta charset="utf-8">
    <?php  use allejo\Socrata\SodaDataset ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>WaggieChecker</title>
        <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container{
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-around;
            align-content: stretch;
        }
        .carDescription{
            width: 400px;
        }
    </style>
    <style>
        .gridcontainer{
            grid-template-columns: 100px 100px;
            grid-template-rows: 80px 80px;
            column-gap: 10px;
            row-gap: 15px;
        }
        .gridcontainer-a{
            grid-column: 1;
            grid-row: 1/2;
        }
        .gridcontainer-b{
            grid-column: 1;
            grid-row: 1/3;
        }
        .container-fluid a{
            color: white;
        }
        .gridcontainer-img{
            display: grid;
            grid-template-columns: 400px 400px
        }
        .a{
            grid-column: 1 / 3;
            grid-row: 1;
        }
        .b{
            grid-column: 1;
            grid-row: 2;
        }
        .c{
            grid-column: 2;
            grid-row: 2;
        }
    </style>
<?php
    $sc = new \allejo\Socrata\SodaClient('opendata.rdw.nl');
    $ds = new SodaDataSet($sc, 'm9d7-ebf2');
    $soql = new \allejo\Socrata\SoqlQuery();
    $soql->where("kenteken = '1TJB99'");

    $car = $ds->getDataset($soql);
?>
    <div class="container-md">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">WaggieChecker</span>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search">
            </form>
            <button type="button" class="btn btn-primary"><a href="/car/car/create">Maak Advert.</a></button>
        </div>
    </nav>
</div>

    <body>
        <div class="container">
            <div class="carTitle">
                <h1>{{$car[0]["merk"]}} {{$car[0]["handelsbenaming"] }}</h1>
            </div>
            <div class="carTitle">
                <h4>Prijs: &euro; 5,900</h4>
            </div>
        </div>
        <div class="container">
            <div class="gridcontainer-a carDescription">
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti eius fugiat, iure minus nobis quas quos veritatis! Accusantium delectus distinctio ipsa laboriosam minus natus quia quidem similique, soluta tempore?</p>
            <h3>Specificaties</h3>
                <div class="gridcontainer-c">
                    <p><b>Merk:</b> {{$car[0]['merk']}}</p>
                    <p><b>Model:</b> {{$car[0]['handelsbenaming']}}</p>
                    <p><b>Kleur:</b> {{$car[0]['eerste_kleur']}}</p>
                    <p><b>Inrichting:</b> {{$car[0]['inrichting']}}</p>
                    <p><b>APK vervaldatum:</b> {{$car[0]['vervaldatum_apk_dt']}}</p>
                    <p><b>Aantal cilinders:</b> {{$car[0]['aantal_cilinders']}}</p>
                    <p><b>Kenteken:</b> {{$car[0]['kenteken']}}</p>
                    <p><b>Massa Rijklaar</b> {{$car[0]['massa_rijklaar']}} KG</p>
                </div>
            </div>
            <div class="gridcontainer-b">
                <div class="gridcontainer-img">
                    <div class="img a"><img src="{{asset("storage/car3.jpg")}}" width="800" height="533"></div>
                    <div class="img b"><img src="{{asset("storage/car_dacia_3.jpg")}}" width="400" height="270"></div>
                    <div class="img c"><img src="{{asset("storage/car_dacia_2.jpg")}}" width="400" height="270"></div>
                </div>
            </div>
        </div>
    </body>
