<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <!-- Bootstrap core CSS -->
<link href="css.carousel.css" rel="stylesheet">
<link href="css.carousel.rtl.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
    @include('master/navbar')
</header>



<h1 class="mb-5">{{$post->title}}</h1>
{{$post->body}}

{{-- <body>
  <main>
    <div>
      <article>
        <hr class="featurette-divider">
          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">{{$post->title}}</h2>
                {!!$post->body!!}
            </div>
            <div class="col-md-5">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg  >
            </div>
          </div>
        </article>
      </div>
    </main>
  </body> --}}
</html>