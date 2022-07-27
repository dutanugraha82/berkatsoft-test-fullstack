<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bioskop Duta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <header>
        @include('layout.navbar')
    </header>
    <section style="margin-top: 5rem;">
        <div class="container">
            <h1 class="text-center text-white">{{ $movies->original_title }}</h1>
            <hr>
            <div class="container p-3" style="background-image:url('https://image.tmdb.org/t/p/w300/{{ $movies->backdrop_path }}');background-repeat:no-repeat;background-size:cover">
                <div class="card border border-3 border-primary rounded-3 mx-auto my-4" style="width: 18rem;">
                    <img src="https://image.tmdb.org/t/p/w300/{{ $movies->poster_path }}" class="card-img-top" alt="...">
                  </div>
                </div>
                  <div class="text-white my-3">
                  <p>{{ $movies->overview }}</p>
                </div>
                <p class="text-white text-center fs-3">Rating : {{ $movies->vote_average }}</p>
        </div>
        <div class="container text-center text-lg-end">
        <a class="btn btn-warning my-3" href="/">
            Kembali
        </a>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>