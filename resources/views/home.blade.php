@extends('layouts.public')


@section('content')
    <div class="container">
        <h1 class="text-center py-5 fw-bold">MOVIES FROM DB</h1>
        <div class="row row-cols-5 gy-3">
            <?php foreach ($home as $movie) {?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $movie->title }} </h5>
                            <p class="card-text">Titolo originale: {{ $movie->original_title }} </p>
                            <p class="card-text">Nazionalità: {{ $movie->nationality }} </p>
                            <p class="card-text">Data uscita: {{ $movie->date }} </p>
                            <p class="card-text">Voto: {{ $movie->vote }} </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
@endsection
