@extends('layouts.base')
@section('content')
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Aanbod.</h2>
                <p>Zie hier alle autos geregistreerd op WaggieChecker!</p>
            </div>
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

{{--                <div>--}}
{{--                    <ul class="portfolio-flters">--}}
{{--                        <li data-filter="*" class="filter-active">All</li>--}}
{{--                        <li data-filter=".filter-app">App</li>--}}
{{--                        <li data-filter=".filter-product">Product</li>--}}
{{--                        <li data-filter=".filter-branding">Branding</li>--}}
{{--                        <li data-filter=".filter-books">Books</li>--}}
{{--                    </ul><!-- End Portfolio Filters -->--}}
{{--                </div>--}}

                <div class="row gy-4 portfolio-container">
                    @foreach($cars as $car)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="carshow" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{$car['img_link']}}" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="" title="More Details">{{$car['merk']." ".$car['handelsbenaming']}}</a></h4>
                                    <p><b>Prijs:</b> &euro; {{$car['prijs']}}<br> <b>Kenteken:</b> {{strtoupper($car['kenteken'])}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
