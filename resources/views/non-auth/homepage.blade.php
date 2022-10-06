@extends('layouts.base')
@section('content')
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="{{asset('assets/img/car-hero.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{$cars}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Geregistreerde Autos</strong> Het aantal autos geregistreerd bij WaggieChecker over de afgelopen jaren.</p>
                    </div>
                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="{{$apks}}" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>APKS</strong> het aantal apks uitgevoerd op alle autos van WaggieChecker</p>
                    </div>

{{--                    <div class="stats-item d-flex align-items-center">--}}
{{--                        <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>--}}
{{--                        <p><strong>Hours Of Support</strong> aut commodi quaerat</p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
