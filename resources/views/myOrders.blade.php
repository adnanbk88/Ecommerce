<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
      <link rel="stylesheet"  href="{{asset('css/style.css') }}">
      <link rel="stylesheet"  href="{{asset('css/style2.css') }}">
      <title>Document</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">BioHouse</a>
         
      <a href="" id="aclient"  class="navbar-brand">   Compte :   <b style="color: black">{{session('client')->nom}} {{session('client')->prenom}}  </a>  

         
       </nav>

      <section id="showcase">
         <input type="checkbox" id="check">
    <label for="check">
      <i class="class="fas fa-user-cog"" id="btn"></i>
      
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>ESPACE CLIENT </header>
      <center>

        <a href="#myOrders" class="active">
          <i class="fas fa-stream"></i>
          <span>VOIR L'ETAT DE MES COMMANDES</span>
        </a>
        <a href="{{asset('/client/InfoClient')}}">
         <i class="fas fa-stream"></i>
          <span> Gérer mes informations  </span>
        </a>
       
       
      </center>
      
    </div>
         <div class="overlay"></div>
         <div class="container">
            <p class="up-title">BioHouse</p>
            <h1 class="page-title">ESPACE CLIENT </h1>
             

         </div>
      </section>

      <hr>

      <section id="myOrders">
         <div class="container">
             @foreach ($orders as $order)
         <center>
              <h3>Commande du :  {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y')}}</h3>
               <h4>L'ETAT DE LA COMMANDE :
                  @if ($order->livraison == 1)
                  <p class="text-success p-4">Bien livrée</p>
              @else
              <form class="p-4" action="{{ url("/client/orders/$order->id/confirm") }}" method="post">
                @csrf
                <button class="btn btn-success  btn-sm"  >BIEN LIVREE</button>
              </form>  
              @endif
                  
                  
                  
                 

              
          <b ><p class="" style="color: green" class="mb-3">TOTAL : <b>{{ $order->prix }} MAD</b></p> </b>  
             </center>  
            
            <table class="table table-striped table-info table-hover" >
               <thead>
                  <tr>
                    <th scope="col">TITRE</th>
                    <th scope="col">PRIX</th>
                    <th scope="col">IMAGE</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($order->products as $product)
                  <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->price}} <b>DHS</b> </td>
                    <td> <img src="{{asset('/storage/uploads/'.$product->image)}}" width="100px" alt=""></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            
            <hr>
          @endforeach
         </div>
         
      </section>
      <footer>
         <div class="container">
            <p>BIO HOUSE &copy; 2021 | All Rights Reserved</p>
         </div>
      </footer>
   </body>
</html>