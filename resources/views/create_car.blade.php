@extends('welcome')

@section('title', 'create a car')

@section('content')
    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="post" action="/create_car">
        {{ csrf_field() }}
        Fahrzeug-Typ: <input type="text" class="form-control" id="typ" name="typ">
        Fahrzeug-Kennzeichen: <input type="text" class="form-control" id="kennzeichen" name="kennzeichen">
        Status:
        <select class="form-control" id="status" name="status">
            <option value="0">FALSE</option>
            <option value="1">TRUE</option>
        </select>

        <input type="submit" value="Speichern">
    </form>
@endsection



<!--
<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    &lt;!&ndash; Fonts &ndash;&gt;
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    &lt;!&ndash; Styles &ndash;&gt;
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
{{--    @if (Route::has('login'))--}}
{{--        <div class="top-right links">--}}
{{--            @auth--}}
{{--                <a href="{{ url('/home') }}">Home</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}">Login</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}

<div class="content">
    <div class="content">
{{--{{&#45;&#45;            {{ $car->typ }} . {{ $car->kennzeichen }} . <br>&#45;&#45;}}--}}
<form method="post" action="/create_car">

    <div class="form-group">
        <label for="typ">Fahrzeug-Typ</label>
        <input type="text" class="form-control" id="typ" name="typ">
    </div>

    <div class="form-group">
        <label for="kennzeichen">Fahrzeug-Kennzeichen</label>
        <input type="text" class="form-control" id="kennzeichen" name="kennzeichen">
    </div>

    <div class="form-group">
        <label for="typ">Fahrzeug-Status</label>
        <select class="form-control" id="status" name="status">
            <option value="0">FALSE</option>
            <option value="1">TRUE</option>
        </select>
    </div>

    <input type="submit" value="Car">

</form>

</div>
</div>
</div>
</body>
</html>
-->

