@extends('layouts.base')
@section('content')
            <div class="col-6 table-infomation">
                <div class="section-heading"><h4>Info.</h4></div>
                <table class=" table table-striped table-hover">
                    <tbody>
                    <tr>
                        <td colspan="2">Merk:</td>
                        <th>{{$data['car']->merk}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Model:</td>
                        <th>{{$data['car']->handelsbenaming}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Inrichting:</td>
                        <th>{{$data['car']->inrichting}}</th>
                    </tr>
                    @if(!empty($data['power']->nettomaximumvermogen))
                        <tr>
                            <td colspan="2">Vermogen in KW:</td>
                            <th>{{$data['power']->nettomaximumvermogen}}</th>
                        </tr>
                    @endif
                    <tr>
                        <td colspan="2">Kleur:</td>
                        <th>{{$data['car']->eerste_kleur}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">APK vervaldatum:</td>
                        <th><?php echo date("d-m-Y", strtotime($data['car']->vervaldatum_apk_dt)) ?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Kenteken:</td>
                        <th>{{$data['car']->kenteken}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Massa Rijklaar:</td>
                        <th>{{$data['car']->massa_rijklaar}} KG</th>
                    </tr>
                    </tbody>
                </table>
                @if(!empty($data['power']->brandstofverbruik_gecombineerd))
                    <div class="section-heading"><h4>Brandstof Gebruik.</h4></div>
                    <table class="table table-striped table-hover">
                        <tbody>
                        <tr>
                            <td colspan="2">Gecombineerd:</td>
                            <th>{{$data['power']->brandstofverbruik_gecombineerd}}{{" l/100KM"}}</th>
                        </tr>
                        <tr>
                            <td colspan="2">Buiten stad:</td>
                            <th>{{$data['power']->brandstofverbruik_buiten}}{{" l/100KM"}}</th>
                        </tr>
                        <tr>
                            <td colspan="2">Stad:</td>
                            <th>{{$data['power']->brandstofverbruik_stad}}{{" l/100KM"}}</th>
                        </tr>
                        </tbody>
                    </table>
                @endif
                <div class="section-heading"><h4>Technische gegevens.</h4></div>
                <table class="table table-striped table-hover">
                    <tbody>
                    <tr>
                        <td colspan="2">Inrichting:</td>
                        <th>{{$data['car']->inrichting}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Kleur:</td>
                        <th>{{$data['car']->eerste_kleur}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Uitvoering:</td>
                        <th>{{$data['car']->uitvoering}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Variant:</td>
                        <th>{{$data['car']->variant}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Wielbasis:</td>
                        <th>{{$data['car']->wielbasis}} MM</th>
                    </tr>
                    <tr>
                        <td colspan="2">Eerste Toelating Internationaal:</td>
                        <th><?php echo date("d-m-Y", strtotime($data['car']->datum_eerste_toelating_dt)) ?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Eerste Toelating Nederland:</td>
                        <th><?php echo date("d-m-Y", strtotime($data['car']->datum_eerste_tenaamstelling_in_nederland)) ?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Laaste Te naamstelling:</td>
                        <th><?php echo date("d-m-Y", strtotime($data['car']->datum_tenaamstelling_dt)) ?></th>
                    </tr>
                    <tr>
                        <td colspan="2">Aantal Wielen:</td>
                        <th>{{$data['car']->aantal_wielen}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Aantal Deuren:</td>
                        <th>{{$data['car']->aantal_deuren}}</th>
                    </tr>
                    @if(!empty($data['car']->maximum_trekken_massa_ongeremd))
                        <tr>
                            <td colspan="2">Max trekmassa ongeremd:</td>
                            <th>{{$data['car']->maximum_trekken_massa_ongeremd}} CC</th>
                        </tr>
                    @endif
                    @if(!empty($data['car']->maximum_trekken_massa_ongeremd))
                        <tr>
                            <td colspan="2">Max Trekmassa Geremd:</td>
                            <th>{{$data['car']->maximum_trekken_massa_geremd}} KG</th>
                        </tr>
                    @endif

                    <tr>
                        <td colspan="2">Wam Verzekerd:</td>
                        <th>{{$data['car']->wam_verzekerd}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">APK vervaldatum:</td>
                        <th><?php echo date("d-m-Y", strtotime($data['car']->vervaldatum_apk_dt)) ?></th>
                    </tr>
                    @if(!empty($data['car']->cilinderinhoud))
                        <tr>
                            <td colspan="2">Cilinderinhoud:</td>
                            <th>{{$data['car']->cilinderinhoud}} CC</th>
                        </tr>
                    @endif
                    @if(!empty($data['car']->aantal_cilinders))
                        <tr>
                            <td colspan="2">Aantal cilinders:</td>
                            <th>{{$data['car']->aantal_cilinders}}</th>
                        </tr>
                    @endif
                    <tr>
                        <td colspan="2">Kenteken:</td>
                        <th>{{$data['car']->kenteken}}</th>
                    </tr>
                    <tr>
                        <td colspan="2">Massa Rijklaar:</td>
                        <th>{{$data['car']->massa_rijklaar}} KG</th>
                    </tr>
                    </tbody>
                </table>
                <div class="section-heading"><h4>Apk.</h4></div>
                @foreach($data['apks'] as $apk)
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
