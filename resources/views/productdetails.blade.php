<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    
    <!-- CDN fontsgoogle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <!-- CDN fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <!-- CSS bootstrap -->
    <link rel="stylesheet" href="/css/style.css">

  </head>

  <body>

  <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid mx-3">
    <a class="navbar-brand" href="{{route('homepage')}}"><img src="/media/logo.svg" alt="logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavAlt" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-success fw-bold" href="{{route('homepage')}}">HOME</a>
        </li>
        <li class="nav-item  mx-md-3">
          <a class="nav-link active text-success fw-bold" aria-current="page" href="{{route('products')}}">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-success fw-bold" href="{{route('aboutus')}}">ABOUT</a>
        </li>
      </ul>
    </div> 
  </div>
</nav>


<section class="container">

<div class="row justify-content-center">

  <div class="col-12 col-md-3 m-5">

  <div class="card" style="width: 18rem;">
  <img src="{{$product['img']}}" class="card-img-top" alt="{{$product['name']}}">
  <div class="card-body d-flex flex-column justify-content-between align-items-center">
    <h5 class="card-title text-center text-success py-3">{{$product['name']}}</h5>
    <p class="card-text text-center">{{$product['description']}}</p>
    <h6 class="text-center">{{$product['price']}}</h6>
    <a href="{{route('products')}}" class="btn btn-warning">Back to products</a>
  </div>
</div>

  </div>
</div>
</section>










    <!-- JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- JS esterno -->
    <script src="/js/main.js"></script>
  </body>
</html>