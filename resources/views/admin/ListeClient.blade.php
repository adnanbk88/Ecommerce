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
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

  <title>ADMIN/GESTION-</title>
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

        <a href="{{url('/admin/')}}" class="active">
          <i class="fas fa-qrcode"></i>
          <span>AFFICHER LA LISTE DES  PRODUITS</span>
        </a>
        
        <a href="{{url('/admin/orders')}}">
          <i class="fas fa-stream"></i>
          <span>AFFICHER TOUTES LES COMMANDES </span>
        </a>
        <a href="{{url('/admin/vente')}}">
           <i class="fas fa-calendar"></i>
          <span>AFFICHER LA LISTE DES VENTES  </span>
        </a>
        <a href="{{url('/admin/create')}}">
           <i class="fas fa-calendar"></i>
          <span>AJOUTER UN NOUVEAU  PRODUIT </span>
        </a>
        <a href="#listeClient">
           <i class="fas fa-calendar"></i>
          <span>AFFICHER LA LISTE DES  CLIENTS </span>
        </a>
      </center>
      
    </div>
    <div class="overlay"></div>
    <div class="container">
      
      <h1 class="page-title">ESPACE ADMINISTRATEUR </h1>
      <p class="up-title">Gestion des utilisateurs </p>
       
          

       
    </div>
</section>
<hr>
  <section id="listeClient">
<div class="container">

  <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOM</th>
          <th scope="col">PRENOM</th>
          <th scope="col">NUMERO</th>
          <th scope="col">EMAIL</th>
          <th scope="col">ADRESSE</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody class="thead-dark">
          @foreach ($clients as $client)
               <tr>
          <th scope="row">{{$client->id}}</th>
          <td>{{$client->nom}}</td>
          <td>{{$client->prenom}}</td>
          <td>{{$client->numero}}</td>
          <td>{{$client->email}}</td>
          <td>{{$client->adresse}}</td>
          <td >
              <form action="{{url('admin/ListeClient/'.$client->id)}}" method="POST">
                  {{ csrf_field() }}
                  @method('DELETE')
              <button class="btn btn-danger"> DELETE </button>
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