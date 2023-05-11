@extends('layouts.base')
@section('content')
    <section class="top-part h-screen bg-[url('https://static01.nyt.com/images/2023/05/07/multimedia/07F1-miami-final-tfpl/07F1-miami-final-tfpl-videoSixteenByNine3000.jpg')] bg-cover">
        <nav class="border-gray-200 bg-[#388174]">
            <div class="flex flex-wrap justify-evenly mx-auto p-4">
                <a href="#" class="flex">
                    <span class="text-left text-white text-2xl font-semibold whitespace-nowrap">WaggieChecker<span class="text-[#f96f59]">.</span> / CarBuddy<span class="text-[#f96f59]">.</span></span>
                </a>
                <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                    <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-1 md:border-0 md:bg-transparent ">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 md:hover:text-white hover:underline hover:underline-offset-8" aria-current="page">Hoofdpagina.</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0  hover:underline hover:underline-offset-8">Aanbod.</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0  hover:underline hover:underline-offset-8">Nieuws.</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0  hover:underline hover:underline-offset-8">Profile.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="flex justify-center mt-40">
            <div class="mx-auto bg-[#388174] pt-10 pb-10 pl-40 pr-40 rounded-xl">
                <h1>Hai</h1>
            </div>
        </div>
    </section>

{{--    <form method="post" action="{{route('kenteken.plateCheck')}}">--}}
{{--        @csrf--}}
{{--        </div>--}}
{{--        <div class="">--}}
{{--            <div class="">--}}
{{--                <div class=""></div>--}}
{{--                <input type="text" placeholder="" name="kenteken" />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <input type="submit" value="Checken" class="btn-get-started">--}}
{{--        </div>--}}
{{--        --}}{{--                            </div>--}}
{{--    </form>--}}
{{--    <img src="" alt="">--}}
@endsection
