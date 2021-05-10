<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&family=Potta+One&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ADMIN/CREATE</title>
</head>
<body>
<section>
   <!-- NAVBAR SECTION -->
   <header id="navbar">
    <div class="container">
        <nav>
            <a href="#" id="nav-btn"><i class="fas fa-bars"></i></a>
            <a id="logo" href="#">BioHouse</a>
            <ul class="nav-links">
                <li><a href="#" class="nav-link">HOMME</a></li>
                <li><a href="#" class="nav-link">FEMME</a></li>
                <li><a href="#" class="nav-link">HOMME AND FEMME</a></li>
                <li><a href="#" class="nav-link">CONTACT</a></li>
                <li><a href="#" class="nav-link">ABOUT US</a></li>
                <li><a href="#" class="nav-link "><i class="fas fa-search"></i></a></li>
                <li><a href="#" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
            <a href="#" id="cart-btn"><i class="fas fa-shopping-cart"></i></a>
        </nav>  
    </div>
</header>

<!-- SHOWCASE SECTION -->
<section id="showcase">
    <div class="overlay"></div>
    <div class="container" id="container">
       
          <form action="{{url('/admin/create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >TITRE</label>
                <input type="text" name="titre" class="form-control" placeholder="TITRE DE PRODUIT"  id="titre">
              </div>
              <div class="form-group col-md-6">
                <label >PRIX</label>
                <input type="number" name="price" class="form-control" placeholder="MAD" id="prix">
              </div>
            </div>
            <div class="form-group">
              <label >QUANTITE DANS LA STOCK</label>
              <input type="number" name="inStock" class="form-control" id="quantite" placeholder="NOMBRE DE PRODUIT DANS LE STOCK">
            </div>
            <div class="form-group">
              <label >IMAGE</label>
              <input type="file" name="image" class="form-control" id="image"  placeholder="*******">
            </div>
            <div class="form-group">
              <label >DESCRIPTION</label>
              <textarea type="text" name="description" class="form-control" id="description"  placeholder="DESCRIPTION DU PRODUIT"> </textarea>
            </div>
            <div class="form-row">
              
              <div class="form-group col-md-4">
                <label >CATEGORIE</label>
                <select id="Categorie" name="category" class="form-control">
                  <option selected>CHOISIR</option>
                  <option value="1">HOMME</option>
                  <option value="2">FEMME</option>
                </select>
              </div>
              
            </div>
            
            <button type="submit"  class="btn btn-success">AJOUTER PRODUIT</button>
          </form>
    </div>
</section>
<footer>
  <div class="container">
    <p>BIO HOUSE &copy; 2021 | All Rights Reserved</p>
  </div>
</footer>
</body>
</html>