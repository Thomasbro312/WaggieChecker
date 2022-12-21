@extends('layouts.base')
@section('content')
    <div class="info-container d-flex flex-column align-items-center justify-content-center">
        <form method="post" action="{{route('kenteken.plateCheck')}}">
            @csrf
            <div>
            <input type="text" name="kenteken">
            </div>
            <div>
            <input type="submit">
            </div>
        </form>
    </div>
@endsection
