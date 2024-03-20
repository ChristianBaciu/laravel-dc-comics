{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina')

@section('header')
    <header>
        <h1 class="text-center m-5">Creazione nuova colonna</h1>

        <div class="table-responsive container">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th class="border border-1" scope="col">N.</th>
                        <th class="border border-1" scope="col">Title</th>
                        <th class="border border-1" scope="col">Description</th>
                        <th class="border border-1" scope="col">Thumb</th>
                        <th class="border border-1" scope="col">Price</th>
                        <th class="border border-1" scope="col">Series</th>
                        <th class="border border-1" scope="col">Sale_date</th>
                        <th class="border border-1" scope="col">Type</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="border border-1 grandezza">{{$comic->id}}</td>
                        <td class="border border-1 grandezza">{{$comic->title}}</td>
                        <td class="border border-1 grandezza-descizione">{{$comic->description}}</td>
                        <td class="border border-1 grandezza">{{$comic->thumb}}</td>
                        <td class="border border-1 grandezza">{{$comic->price}}</td>
                        <td class="border border-1 grandezza">{{$comic->series}}</td>
                        <td class="border border-1 grandezza">{{$comic->sale_date}}</td>
                        <td class="border border-1 grandezza">{{$comic->type}}</td>
                    </tr>
                </tbody>
            </table>
        </div>




    </header>
@endsection
