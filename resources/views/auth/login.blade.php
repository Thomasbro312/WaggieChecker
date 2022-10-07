@extends('layouts.auth.base')
@section('content')
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-header">
                <h2>Jouw account</h2>
                <p>Log in jouw account of maak een account aan.</p>
            </div>

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Voordelen</h4>
                                <p>Je auto verkopen<br> berichten sturen naar mensen.</p>
                            </div>
                        </div>

                        <div class="info-item d-flex">
                            <a href="{{route('register')}}"><i class="bi bi-person flex-shrink-0"></i></a>
                            <div>
                                <h4>Nog geen account?</h4>
                                <p>Registreer dan nu!</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <form method="POST" action="{{ route('login') }}" role="form" class="php-email-form" id="form.submit">
                        @csrf
                        <div class="row justify-content-center align-self-center">
                            <div class="col-md-6 form-group mt-3 mt-md-0 ">
                                <input type="email" class="form-control" name="email" id="email" placeholder="wie@waggiechecker.nl" required>
                            </div>
                        </div>
                        <div class="row justify-content-center align-self-center">
                            <div class="form-group col-md-6 mt-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Je wachtwoord" required>
                            </div>
                        </div>
                        <div class="text-center mt-4"><button id="submit.form" type="submit">Login</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->
    <script>
        document.getElementById('submit.form').addEventListener('click',function () {
           document.getElementById('form.submit').submit();
        });
    </script>

@endsection
