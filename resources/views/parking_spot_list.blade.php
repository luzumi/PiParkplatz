@extends('welcome')

@section('title', 'Parkplatz-Übersicht')

@section('content')
    <div class="content">
        <div class="title m-b-md">

            @foreach($parking_spots as $parking_spot)
                {{ $parking_spot->id }}  {{ $parking_spot->section }}  <br>
            @endforeach
        </div>
    </div>
@endsection



