{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina 2')
@section('header')
    <header>
        <h1 class="text-center mt-5">Create</h1>

        <div class="container w-50">

            {{-- $errors variabile generata da Laravel --}}
            {{-- any controllare se è presente un errore nel dato --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {{-- se è presente un errore verrà eseguito il foreach --}}
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('comics.store')}}" method="POST">
                @csrf {{-- token --}}

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea
                    name="description"
                    id="description"
                    class="form-control"
                    rows="1">
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input
                    type="text"
                    class="form-control"
                    name="thumb"
                    id="thumb">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input
                    type="number"
                    class="form-control"
                    name="price"
                    id="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input
                    type="text"
                    class="form-control"
                    name="series"
                    id="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input
                    type="date"
                    class="form-control"
                    name="sale_date"
                    id="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Peso</label>
                    <input
                    type="text"
                    class="form-control"
                    name="type"
                    id="type">
                </div>

                <button type="submit" class="btn btn-primary">
                    Crea
                </button>

            </form>
        </div>

    </header>
@endsection
