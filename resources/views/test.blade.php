@extends('layouts.auth.base')
@section('content')
    <h1>Pusher Test</h1>
    <p>
        Publish an event to channel <code>my-channel</code>
        with event name <code>my-event</code>; it will appear below:
    </p>
    <div id="app">
{{--        <example-component></example-component>--}}
        <ul>
        </ul>
    </div>
    <script>
        Pusher.logToConsole = true;

        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        })

        var pusher = new Pusher('25aae99e7bb71a2efcb7', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            app.messages.push(JSON.stringify(data));
        });

    </script>
@endsection
