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
<?php
    $sc = new \allejo\Socrata\SodaClient('opendata.rdw.nl');
    $ds = new SodaDataSet($sc, 'm9d7-ebf2');
    $soql = new \allejo\Socrata\SoqlQuery();
    $soql->select("merk","kenteken","handelsbenaming")->where("kenteken = '99TJNP'");

    $car1 = $ds->getDataset($soql);
?>
    <div class="container-md">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">WaggieChecker</span>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search">
            </form>
            <img src="" alt="" width="30" height="24" class="d-inline-block align-text-top">
        </div>
    </nav>
</div>

    <body>
        <div class="carTitle">
            <h1>{{$car1[0]["merk"]}}</h1>
        </div>
        <div class="carDescription">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti eius fugiat, iure minus nobis quas quos veritatis! Accusantium delectus distinctio ipsa laboriosam minus natus quia quidem similique, soluta tempore?</p>
        </div>
    </body>
