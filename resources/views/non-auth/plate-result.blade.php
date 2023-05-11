@extends('layouts.base')
@section('content')
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
                    @if(!empty($power->nettomaximumvermogen))
                        <tr>
                            <td colspan="2">Vermogen in KW:</td>
                            <th>{{$power->nettomaximumvermogen}}</th>
                        </tr>
                    @endif
                    <tr>
                        <td colspan="2">Kleur:</td>
                        <th>{{$car->eerste_kleur}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">APK vervaldatum:</td>
                        <th><?php echo date("d-m-Y", strtotime($car->vervaldatum_apk_dt)) ?></th>
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
                @if(!empty($power->brandstofverbruik_gecombineerd))
                    <div class="section-heading"><h4>Brandstof Gebruik.</h4></div>
                    <table class="table table-striped table-hover">
                        <tbody>
                        <tr>
                            <td colspan="2">Gecombineerd:</td>
                            <th>{{$power->brandstofverbruik_gecombineerd}}{{" l/100KM"}}</th>
                        </tr>
                        <tr>
                            <td colspan="2">Buiten stad:</td>
                            <th>{{$power->brandstofverbruik_buiten}}{{" l/100KM"}}</th>
                        </tr>
                        <tr>
                            <td colspan="2">Stad:</td>
                            <th>{{$power->brandstofverbruik_stad}}{{" l/100KM"}}</th>
                        </tr>
                        </tbody>
                    </table>
                @endif
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
                        <th><?php echo date("d-m-Y", strtotime($car->datum_eerste_toelating_dt)) ?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Eerste Toelating Nederland:</td>
                        <th><?php echo date("d-m-Y", strtotime($car->datum_eerste_tenaamstelling_in_nederland)) ?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Laaste Te naamstelling:</td>
                        <th><?php echo date("d-m-Y", strtotime($car->datum_tenaamstelling_dt)) ?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Aantal Wielen:</td>
                        <th>{{$car->aantal_wielen}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Aantal Deuren:</td>
                        <th>{{$car->aantal_deuren}}</th>
                    </tr>
                    @if(!empty($car->maximum_trekken_massa_ongeremd))
                        <tr>
                            <td colspan="2">Max trekmassa ongeremd:</td>
                            <th>{{$car->maximum_trekken_massa_ongeremd}} CC</th>
                        </tr>
                    @endif
                    @if(!empty($car->maximum_trekken_massa_ongeremd))
                        <tr>
                            <td colspan="2">Max Trekmassa Geremd:</td>
                            <th>{{$car->maximum_trekken_massa_geremd}} KG</th>
                        </tr>
                    @endif

                    <tr>
                        <td colspan="2">Wam Verzekerd:</td>
                        <th>{{$car->wam_verzekerd}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">APK vervaldatum:</td>
                        <th><?php echo date("d-m-Y", strtotime($car->vervaldatum_apk_dt)) ?></th>
                    </tr>
                    @if(!empty($car->cilinderinhoud))
                        <tr>
                            <td colspan="2">Cilinderinhoud:</td>
                            <th>{{$car->cilinderinhoud}} CC</th>
                        </tr>
                    @endif
                    @if(!empty($car->aantal_cilinders))
                        <tr>
                            <td colspan="2">Aantal cilinders:</td>
                            <th>{{$car->aantal_cilinders}}</th>
                        </tr>
                    @endif
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
                            <th>
                            <?php echo date("d-m-Y", strtotime($apk->meld_datum_door_keuringsinstantie)) ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Meld tijd keuring:</td>
                            <th>
                            {{$apk->meld_tijd_door_keuringsinstantie}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Gebrek identificatie:</td>
                            <th><?php $code = $apk->gebrek_identificatie; $code_description = $rdw->getCarBreaksWithCode($code); echo $code_description->gebrek_omschrijving; ?>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
    </div>
@endsection
