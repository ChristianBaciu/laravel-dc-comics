{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina')

@section('header')
    <header>
        <h1>Pagina 1</h1>

        <a href="{{route('comics.create')}}"
        class="btn btn-primary">
            crea
        </a>


        {{-- {{dd($comics)}} --}}

        <div class="table-responsive container">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">thumb</th>
                        <th scope="col">price</th>
                        <th scope="col">series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">type</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->thumb}}</td>
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->sale_date}}</td>
                            <td>{{$comic->type}}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </header>
@endsection
