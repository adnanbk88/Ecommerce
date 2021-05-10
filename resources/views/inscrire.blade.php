<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css') }}">
    <link rel="stylesheet"  href="{{asset('css/style4.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&family=Potta+One&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>



<section id="showcase">
  <div class="overlay"></div>
  <div class="container" id="container">
      
     
    <div class="main">
      <img src="{{asset('img/logo.png')}}"  width="110px" alt="">
      <p class="sign" align="center">S'inscrire </p>

       <form action="{{url('/client/create')}}" method="POST" >
            @csrf
        <input class="un " name="nom"  placeholder="votre nom"  id="nom" align="center" placeholder="Nom">
        <input class="un " type="text" name="prenom" id="prenom" align="center" placeholder="Prenom">
        <input class="un " type="email" name="email" id="email" align="center" placeholder="Email">
        <input class="un " type="number" name="numero" id="num" align="center" placeholder="Telephone">
        <input class="un " type="adresse" name="adresse" id="adresse" align="center" placeholder="Adresse">
        <input class="pass" type="password" name="password"id="password" align="center" placeholder="Password">
        <a class="aa" href="{{url('/authClient')}}">DEJA CLIENT ? SE CONNECTER </a>
        <button class="submit py-3" type="submit" align="center">Sign in</button> 

      </form>          
      
    </div>
  </div>
</section>
<footer>
    <p>BIO HOUSE &copy; 2021 | All Rights Reserved</p>
  </div>
</footer>
</body>
</html>