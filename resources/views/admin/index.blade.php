<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css') }}">
    <link rel="stylesheet"  href="{{asset('css/style2.css') }}">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

  <title>ADMIN/HOME</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
       <a class="navbar-brand" href="#">BioHouse</a>
       <a href="" id="aclient"  class="navbar-brand">   Administrateur :   <b style="color: red">{{auth()->user()->name}} </a>  

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
          <span>AFFICHIER LA LISTE DES PRODUITS </span>
        </a>
        
        <a href="{{url('/admin/orders')}}">
          <i class="fas fa-stream"></i>
          <span>VOIR TOUTES LES COMMANDES </span>
        </a>
        <a href="{{url('/admin/vente')}}">
           <i class="fas fa-calendar"></i>
          <span>AFFICHIER LISTE DES VENTES  </span>
        </a>
        <a href="{{url('/admin/create')}}">
           <i class="fas fa-plus-square"></i>
          <span>AJOUTER UN NOUVEAU  PRODUIT </span>
        </a>
        <a href="{{url('/admin/ListeClient')}}">
           <i class="fas fa-list"></i>
          <span>AFFICHIER LA LISTE DES CLIENTS </span>
        </a>
      </center>
      
    </div>
    <div class="overlay"></div>
    <div class="container">
      <p class="up-title">BIOHOUSE </p>

        <h1 class="page-title">ESPACE ADMINISTRATEUR </h1>
       
          

       
    </div>
</section>
<hr>
  <section id="listeProduit">
<div class="container">
  
  <table class="table table-striped table-danger table-hover" >
    <thead>
      <tr>
        <th scope="col">№</th>
        <th scope="col">PHOTO</th>
        <th scope="col">TITRE</th>
        <th scope="col">PRIX</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">QUANTITE </th>
        <th scope="col">CATEGORIE</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
             <tr>
        <td>{{$product->id}}</td>
        <th scope="row"><img src="{{asset('/storage/uploads/'.$product->image)}}"  width="60%" alt="" srcset=""></th>
        <td>{{$product->title}}</td>
        <td>{{$product->price}} <b>MAD</b></td>
        <td>{{$product->description}}</td>
        <td>{{$product->inStock}}</td>
        <td>{{$product->category->title}}</td>
      
        <td>
          <form action="{{url('admin/'.$product->id)}}" method="post">
  {{ csrf_field() }}
  @method('DELETE')
  
            <td> <a class="btn btn-success" href="{{ url('admin/'.$product->id. '/edite') }}">EDITE</a></td>
            <td> <a class="btn btn-dark" href="{{url('single/'.$product->id)}}">SHOW</a></td>
            <td>  <button type="submit" class="btn btn-danger"> DELETE</button>  </td>
  
          </form>
  
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