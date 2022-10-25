@extends('welcome')

@section('title', 'Create Parkingspot')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            {{ $parking_spot->id }} . {{ $parking_spot->section }}
        </div>
    </div>
@endsection

