<header>
    <div class="container d-flex justify-content-center align-items-center">
        <h1 class="text-danger">Sono Header</h1>
        
        <figure class="m-0">
            <img src="{{ Vite::asset('resources/img/mondo.png') }}" alt="world">
        </figure>
    </div>
</header>

{{-- ------------------------------------------------------------ --}}

<style>
    header{
        h1{
            font-size: 100px;
            text-transform: uppercase;
        }
        img{
            width: 100px;
        }
    }
</style>