@extends('layouts.base')
@section('content')
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5 flex justify-center" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <div class="text-white text-center">
                        <h1><span>Coming Soon.</span></h1>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{asset('assets/img/car-hero.png')}}" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
            </div>
        </div>
    </section>
@endsection
