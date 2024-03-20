{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina 2')

@section('header')
    <header>
        <h1>Pagina 2</h1>

        <div class="container">

            <form action="{{route('comics.store')}}" method="POST">
                {{-- token di laravel --}}
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">titolo</label>
                    <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">descrizione</label>
                    <textarea
                    name="description"
                    id="description"
                    class="form-control"
                    rows="1">
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">img</label>
                    <input
                    type="text"
                    class="form-control"
                    name="thumb"
                    id="thumb">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">prezzo</label>
                    <input
                    type="number"
                    class="form-control"
                    name="price"
                    id="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">serie</label>
                    <input
                    type="text"
                    class="form-control"
                    name="series"
                    id="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">data</label>
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
                    crea
                </button>

            </form>
        </div>

    </header>
@endsection
