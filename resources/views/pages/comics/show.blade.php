{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina')

@section('header')
    <header>
        <h1>Pagina 3</h1>

        <p>{{$comic->title}}</p>
        <p>{{$comic->description}}</p>
        <p>{{$comic->thumb}}</p>
        <p>{{$comic->price}}</p>
        <p>{{$comic->series}}</p>
        <p>{{$comic->sale_date}}</p>
        <p>{{$comic->type}}</p>

    </header>
@endsection
