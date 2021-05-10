<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>CART</title>
</head>
<body>
   <!-- NAVBAR SECTION -->
    <header id="navbar">
        <div class="container">
            <nav>
              
                <a id="logo" href="{{asset('/')}}">BioHouse</a>
               
            </nav>  
        </div>
    </header>
  
    <!-- SHOWCASE SECTION -->
    <section id="showcase">
        <div class="overlay"></div>
        <div class="container">
            <p class="up-title">FINALISER LA COMMANDE</p>
            <img src="{{asset('img/logo.png')}}" width="150px" alt="">
            <h1 class="page-title">Mon Panier</h1>
        
           
          </div>
    </section>
    <center>
      <a href="{{url('/')}}"> <button   class="btn btn-secondary m-3">Completer Mon Panier  </button> </a> 
    
       <a href="{{url('/inscrire')}}"> <button   class="btn btn-success m-3">Finaliser L'achat </button> </a> 
       
    </center>
    <center>

      <button class="btn btn-info" style="width: fit-content;margin: auto" style="background-color: blue"> <b>TOTAL PRIX : {{ App\Calc::total($products) }} MAD</b>   </button>  
    </center>
    <hr>
<section id="panier">
  <div class="container">
    <table style="margin: auto "  class="table table-striped table-info table-hover" >
        <thead>
    
          <tr>
            <th scope="col">ID</th>
            <th scope="col">PHOTO</th>
            <th scope="col">TITRE</th>
            <th scope="col">PRIX</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">CATEGORIE</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
                    @foreach ($products as $product)
    
                 <tr>
            <td>{{$product->id}}</td>
            <th scope="row"><img src="{{asset('/storage/uploads/'.$product->image)}}"  width="20%" alt="" srcset=""></th>
            <td>{{$product->title}}</td>
            <td>{{$product->price}} <b>MAD</b> </td>
            <td>{{$product->description}}</td>
            <td>{{$product->category->title}}</td>
            <td> <form action="{{ url("/deleteFromCart/$product->id") }}" method="POST">
                @csrf
                <button class="btn btn-danger">Supprimer</button>
            </form>
        </td>
          
            
           
          </tr>
                     
    
            @endforeach
         
         
        </tbody>
      </table>

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