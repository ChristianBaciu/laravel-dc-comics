{{-- Laravel utilizzera il layout 'layouts.app.blade.php' come struttura principale per la parte visiva --}}
@extends('layouts.app')

{{-- imposta il titolo della pagina ( @yield('title') ) --}}
@section('title', 'Inizio pagina')

@section('main')
    <main>
        <h1>ciao</h1>

        {{dd($comics)}}

            {{-- <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">title</th>
                            <th scope="col">description</th>
                            <th scope="col">price</th>
                            <th scope="col">series</th>
                            <th scope="col">sale_date</th>
                            <th scope="col">type</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($comics as $comic)
                            <tr class="">
                                <td>{{$comic->title}} </td>
                                <td> </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div> --}}



    </main>
@endsection
