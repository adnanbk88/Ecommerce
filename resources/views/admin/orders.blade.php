
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

  <title>ADMIN/COMMANDE</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
       <a class="navbar-brand" href="#">BioHouse</a>
       <a href="" id="aclient"  class="navbar-brand">   Administrateur :   <b style="color: red">{{auth()->user()->name}} </a>  

    </div>
   

    

    
   
  </nav>
      </div>
    </center>
    
    </div>
  </nav>
  <section id="showcase">

    <input type="checkbox" id="check">
    <label for="check">
      <i class="class="fas fa-user-cog"" id="btn"></i>
      
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>ESPACE ADMIN</header>
      <center>

        <a href="#listeProduit" class="active">
          <i class="fab fa-product-hunt"></i>
          <span>AFFICHER LA LISTE DES  PRODUITS</span>
        </a>
        
        <a href="{{url('/admin/orders')}}">
          <i class="fas fa-stream"></i>
          <span>VOI TOUTES LES COMMANDES </span>
        </a>
        <a href="{{url('/admin/vente')}}">
           <i class="fas fa-calendar"></i>
          <span>AFFICHER LA LISTE DES VENTES </span>
        </a>
        <a href="{{url('/admin/create')}}">
           <i class="fas fa-plus-square"></i>
          <span>AJOUTER UN NOUVEAU PRODUIT </span>
        </a>
        <a href="{{url('/admin/ListeClient')}}">
           <i class="fas fa-list"></i>
          <span>AFFICHER LA LISTE DES CLIENTS </span>
        </a>
      </center>
    
  </div>
    <div class="overlay"></div>
    <div class="container">
         
      <h1 class="page-title">ESPACE ADMINISTRATEUR </h1>
      <p class="up-title">LISTE DE COMMDANDES </p>
    </div>
</section>
<hr>
  <section>

<div class="container">
  <table class="table table table-primary table-hover" >
    <thead>
      <tr class="bg-white">
        <th scope="col">№ COMMANDE</th>
        <th scope="col">№ PROTUIT</th>
        <th scope="col">NOM CLIENT</th>
        <th scope="col">ADRESSE CLIENT</th>
        <th scope="col">C.CLIENT</th>
        <th scope="col">DATE DU COMMANDE</th>
        <th scope="col">PRIX TOTAL</th>
        <th scope="col">ETAT DE LIVRAISON</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
          
      <tr class="">
        
        <td>{{$order->id}}</td>
        <th>
           @foreach (json_decode($order->products)  as $id)
            
         {{$id}} , 
         @endforeach
      </th>
        <th>{{$order->client->nom}} {{$order->client->prenom}}</th>
        <td>{{$order->client->adresse}}</td>
        <td>{{$order->client->numero}}</td>
        <td>{{$order->created_at}}</td>
        <td>{{$order->prix}} <b>MAD</b> </td>
        <td>
          @if ($order->livraison == 1)
                  <p class="text-success">Bien livrée</p>
                  
              @else 
              <p class="text-danger">En cours de traitement </p>
               </h4>
              @endif
        </td>
      </tr>
      @endforeach
        
        
      
        
         
    </tbody>
  </table>

</div>
  </section>

  <footer>
    <div class="container">
      <p>BIO HOUSE &copy; 2021 | All Rights Reserved</p>
    </div>
  </footer>
</body>
</html>