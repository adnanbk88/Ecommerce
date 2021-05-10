<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <title>BIOHOUSE</title>
  </head>
  <body>
    
    
    <!-- SINGLE PRODUCT SECTION -->
    <section id="single">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2">
            <div class="row">
              <div class="col-12 mb-2">
                <div class="box">
                  <img
                    src="{{asset('/storage/uploads/'.$product->image)}}"
                    alt="product image"
                    class="single-product-img"
                  />
                </div>

              </div>
            
            
            </div>
          </div>
          <div class="col-md-6 order-md-2 mb-3">
            <div class="product-info">
              <h1 class="title">{{$product->title}}</h1>

              <hr />
              <p>
                  <p>
                    {{$product->description}}
                   </p>
                </p>
              <div class="flex">
                <form action="{{url('addToCart/'.$product->id)}}" method="POST">
                  @csrf
                  <button class="cta cta-out"><i class="fas fa-shopping-cart"></i> Ajouter au panier</button>
                </form>
                <div class="cta cta-full">ACHERTER MAINTENANT</div>
              </div>
              <div class="product-discription-text">
                
                
                <ul style="list-style: none">
                 
                  <li><h3>CATEGORIE:</h3> {{$product->category->title}}</li>
                  <li><h3>PRIX :</h3>{{$product->price}} <h3> <b>DHS</b></h3></li>
                  <li><h3>Quantité:</h3> {{$product->inStock}}</li>
                  
                  
                  
                </ul>
              </div>
              <ul class="share-links">
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i> Share</a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i> Tweet</a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i> Insta</a>
                </li>
              </ul>
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
    <script src="js/app.js"></script>
  </body>
</html>
