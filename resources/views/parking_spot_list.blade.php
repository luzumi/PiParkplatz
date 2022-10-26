@extends('welcome')

@section('title', 'Parkplatz-Übersicht')

@section('content')
    <div class="content">
        <div class="title m-b-md">

            @foreach($parking_spots as $parking_spot)
                {{ $parking_spot->number }} - {{ $parking_spot->section }} - {{ $parking_spot->status ? 'Belegt' : 'Frei' }}  <br>
            @endforeach
        </div>
    </div>
@endsection



