{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina 2')
@section('header')
    <header>
        <h1 class="text-center mt-5">Edit</h1>

        <div class="container w-50">

            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf {{-- token --}}
                @method('PUT') {{-- per aggioranre una risorsa che esiste già nel server --}}

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input
                    type="text"
                    class="form-control"
                    name="title" id="title"
                    value="{{ old('title') ?? $comic->title }}" required>{{-- per prendere la vecchia informazione --}}
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea
                    name="description" id="description"
                    class="form-control"
                    rows="1">
                    {{ old('description') ?? $comic->description }}>{{-- per prendere la vecchia informazione --}}
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input
                    type="text"
                    class="form-control"
                    name="thumb" id="thumb"
                    value="{{ old('thumb') ?? $comic->thumb }}" required>{{-- per prendere la vecchia informazione --}}
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input
                    type="number"
                    class="form-control"
                    name="price" id="price"
                    value="{{ old('price') ?? $comic->price }}" required>{{-- per prendere la vecchia informazione --}}
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input
                    type="text"
                    class="form-control"
                    name="series" id="series"
                    value="{{ old('series') ?? $comic->series }}" required>{{-- per prendere la vecchia informazione --}}
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input
                    type="date"
                    class="form-control"
                    name="sale_date" id="sale_date"
                    value="{{ old('sale_date') ?? $comic->sale_date }}" required>{{-- per prendere la vecchia informazione --}}
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Peso</label>
                    <input
                    type="text"
                    class="form-control"
                    name="type" id="type"
                    value="{{ old('type') ?? $comic->type }}" required>{{-- per prendere la vecchia informazione --}}
                </div>

                <button type="submit" class="btn btn-warning">
                    Crea
                </button>

            </form>
        </div>
    </header>
@endsection
