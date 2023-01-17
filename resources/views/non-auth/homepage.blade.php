@extends('layouts.base')
@section('content')
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2><span>WaggieChecker</span></h2>
                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <form method="post" action="{{route('kenteken.plateCheck')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="kenteken" placeholder="Voer hier uw Kenteken in">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" value="Checken" class="btn-get-started">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{asset('assets/img/car-hero.png')}}" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-clipboard-check"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Kenteken Checker</a></h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-car-front"></i></div>
                            <h4 class="title"><a href="{{route('aanbod')}}" class="stretched-link">Groot aanbod</a></h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-display"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Veel informatie</a></h4>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-diagram-2"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Veel statistieken</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
