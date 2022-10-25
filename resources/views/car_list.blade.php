@extends('welcome')

@section('title', 'car_list')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            @foreach($cars as $car)
                {{ $car->typ }} - {{ $car->kennzeichen }} / {{ $car->id%2===0? 'parkt' : 'parkt nicht' }}  <br>
            @endforeach
        </div>
    </div>
@endsection




