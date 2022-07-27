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
            <h1 class="text-center text-white">Top Rated</h1>
            <hr>
            <div class="row">
              @foreach ($movies as $item)
              <div class="col-md-4">
                <a href="/movies/{{ $item->id }}" style="text-decoration: none">
                <div class="card border border-3 border-primary rounded-3 mx-auto my-4" style="width: 18rem;">
                    <img src="https://image.tmdb.org/t/p/w300/{{ $item->poster_path }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text text-dark fs-5 text-center">{{ $item->original_title }} </p>
                      <small class="mx-auto text-dark">{{ $item->release_date }}</small>
                      <p class="text-dark">Rate :{{ $item->vote_average }} (<small>{{ $item->vote_count }}(voted)</small>)</p>
                    </div>
                  </div>
                </a>
            </div>
              @endforeach
                
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>