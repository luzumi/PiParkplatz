@extends('welcome')

@section('title', 'Create Parkingspot')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            {{ $parking_spot->number }} {{ $parking_spot->section }} {{ $parking_spot->status }}
        </div>
    </div>
@endsection

