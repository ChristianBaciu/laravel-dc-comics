{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina')
@section('header')
    <header>
        <div class="text-center m-5">
            <h1>Pagina Principale</h1>

            <a href="{{route('comics.create')}}"
                class="btn btn-primary">
                Crea
            </a>
        </div>
        {{-- {{dd($comics)}} --}}
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
                        <th class="border border-1" scope="col">Azioni</th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td class="border border-1 grandezza">{{$comic->id}}</td>
                        <td class="border border-1 grandezza">{{$comic->title}}</td>
                        <td class="border border-1">          {{$comic->description}}</td>
                        <td class="border border-1 grandezza">{{$comic->thumb}}</td>
                        <td class="border border-1 grandezza">{{$comic->price}}</td>
                        <td class="border border-1 grandezza">{{$comic->series}}</td>
                        <td class="border border-1 grandezza">{{$comic->sale_date}}</td>
                        <td class="border border-1 grandezza">{{$comic->type}}</td>

                        <td class="border border-1">
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">
                                Modifica
                            </a>

                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf {{-- token --}}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </header>
@endsection


<style>
.grandezza{
    max-width: 200px;
    overflow: hidden;
}
</style>
