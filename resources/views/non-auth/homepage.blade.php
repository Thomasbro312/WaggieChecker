@extends('layouts.base')
@section('content')

    <nav class="border-gray-200 bg-[#388174]">
        <div class="flex flex-wrap justify-between mx-auto p-4">
            <a href="#" class="flex">
                <span class="text-left text-white text-2xl font-semibold whitespace-nowrap">WaggieChecker<span class="text-[#f96f59]">.</span> / CarBuddy<span class="text-[#f96f59]">.</span></span>
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden" aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent ">
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


























    <form method="post" action="{{route('kenteken.plateCheck')}}">
        @csrf
        </div>
        <div class="">
            <div class="">
                <div class=""></div>
                <input type="text" placeholder="" name="kenteken" />
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Checken" class="btn-get-started">
        </div>
        {{--                            </div>--}}
    </form>
    <img src="" alt="">
@endsection
