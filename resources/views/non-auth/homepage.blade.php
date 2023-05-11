@extends('layouts.base')
@section('content')
    <h2>hallo</h2>
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
