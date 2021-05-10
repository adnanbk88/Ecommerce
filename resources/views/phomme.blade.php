<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}">
    <link rel="stylesheet"  href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <title>BioHouse</title>
</head>

<body>
    <!-- NAVBAR SECTION -->
    <header id="navbar">
        <div class="container">
            <nav>
                <a href="#" id="nav-btn"><i class="fas fa-bars"></i></a>
                <a id="logo" href="{{asset('/')}}">BioHouse</a>                <ul class="nav-links">
                    <li><a href="{{asset('/phomme')}}" class="nav-link">HOMME</a></li>
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
    <section id="showcasee">
        <div class="overlay"></div>
        <div class="container">
            
            <h1 class="page-title">CATEGORIE / HOMME</h1>
            <a href="#" class="cta cta-full">ACHETER </a>
        </div>
    </section>
    <section id="products">
        <div class="container">
            <h2 class="section-tilte">NOS PRODUITS</h2>
            <hr class="sub-line">
            <div class="row">
                @foreach ($products as $product) 
                    <div class="col-lg-4 col-sm-6">

                    <a href="#">
                        <div class="product">
                            <img src="{{asset('/storage/uploads/'.$product->image)}}" alt="product" class="product-img">
                            <p class="product-title"> {{$product->title}}<span class="price">{{$product->price}} <B>DHS</B> </span></p>
                            


                            <a href="{{url('single/'.$product->id)}}"><i class="fas fa-eye"></i></a>
                        </div>
                    </a>
                </div>  
                @endforeach
                
            </div>
        </div>
    </section>

</body>
</html>