<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Buy</title>
</head>
<body>

      <!-- NAVBAR SECTION -->
      <header id="navbar">
        <div class="container">
            <nav>
                <a href="#" id="nav-btn"><i class="fas fa-bars"></i></a>
                <a id="logo" href="{{asset('/')}}">BioHouse</a>
               
            </nav>  
        </div>
    </header>
  
    <!-- SHOWCASE SECTION -->
    <section id="showcase">
        <div class="overlay"></div>
        <div class="container">
            <h1 class="page-title">FINALISER L'ACHAT </h1>
            

 <div class="container py-5 my-5">
        <div class="row">
            <div class="col-mg-6">
                <ul class="list-group mb-3">
                    <li class="list-group-item bg-light d-flex justify-content-between align-items-center">
                        <b style="color: black" > NOM PRODUIT</b> 
                        <span class="badge bg-dark rounded-pill">PRIX MAD</span>
                        </li>
                    @foreach ($products as $product)
                        <li style="color: black" class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $product->title }}
                        <span class="badge bg-primary rounded-pill">{{ $product->price }} <B>MAD</B> </span>
                        </li>
                    @endforeach
                    <li class="list-group-item bg-light d-flex justify-content-between align-items-center">
                   <b style="color: black"> PRIX TOTAL</b>  
                    <span class="badge bg-dark rounded-pill">{{ App\Calc::total($products) }} <b>MAD</b> </span>
                    </li>
                </ul>
                
                <form action="{{ url('/order') }}" method="post">
                    @csrf
                    <input type="hidden" name="prix" value="{{ App\Calc::total($products) }}">
<center>
    <button class="btn btn-success m-3">PASSER LA COMMANDE</button>
   </form>
                        <form action="{{ url('/pdf') }}">

                        <button  class="btn btn-success m-3">TELECHARGER LA FACTURE </button>

                        </form>
</center>
                        
             
            </div>
        </div>
    </div>   

        </div>
    </section>
  
    <!-- FOOTER SECTION -->
    <footer>
        <div class="container">
          <p>BIO HOUSE &copy; 2021 | All Rights Reserved</p>
        </div>
      </footer>
</body>
</html>