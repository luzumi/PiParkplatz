@extends('welcome')

@section('title', 'Show a Car')

@section('content')
    @if(count($errors)>0)
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="post" action="/show_this_car">
        {{ csrf_field() }}
        Fahrzeugauswahl zu Anzeige:
        <label for="id">

        </label><select class="form-control" id="id" name="id" multiple>
            @for($i=0;$i<$cars_count; $i++)
                <option value= {{ $i + 1 }}>{{ $i + 1 }}</option>
            @endfor()
        </select>

        <input type="submit" value="Anzeigen">
    </form>

    @yield('show_this_car')

@endsection
