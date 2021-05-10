<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css') }}">
    <link rel="stylesheet"  href="{{asset('css/style3.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&family=Potta+One&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>


  <section id="showcase">
    <div class="overlay"></div>
    <div class="container" id="container">
        
       
      <div class="main">
        <p class="sign" align="center">Se connecter </p>
        <img src="{{asset('img/logo.png')}}"  width="150px" alt="">

        <form action="{{url('/authClient')}}" class="form1" method="POST" >

          @csrf
          <input class="un " type="email" name="email" id="email" align="center" placeholder="Email">
          <input class="pass" type="password" name="password"id="password" align="center" placeholder="Password">
          <button class="submit" type="submit" align="center">Sign in</button>
        </form>          
                    
        </div>
    </div>
</section>
<footer>
  <div class="container">
    <p>BIO HOUSE &copy; 2021 | All Rights Reserved</p>
  </div>
</footer>
</body>
</html>