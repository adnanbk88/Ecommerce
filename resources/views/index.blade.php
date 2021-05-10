<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <title>BioHouse</title>
</head>

<body>
    <!-- NAVBAR SECTION -->
    <header id="navbar">
        <div class="container">
            <nav>
                <a href="#" id="nav-btn"><i class="fas fa-bars"></i></a>
                <a id="logo" href="{{asset('/')}}">BioHouse</a>
                <ul class="nav-links">
                    <li><a href="{{asset('/phomme')}}" class="nav-link">HOMME</a></li>
                    <li><a href="{{asset('/pfemme')}}" class="nav-link">FEMME</a></li>
                    <li><a href="#subscribe" class="nav-link">CONTACT</a></li>
                    <li><a href="#" class="nav-link">RESEAU SOCIAUX</a></li>

                    <li><a href="#" class="nav-link">ABOUT US</a></li>
                    <li><a href="#" class="nav-link "><i class="fas fa-search"></i></a></li>
                    <li><a href="{{url('client/orders')}}" class="nav-link"><i class="fas fa-sign-in-alt"></i></a></li>
                </ul>
                <a href="{{url('client/orders')}}" id="cart-btn"><i class="fas fa-sign-in-alt"></i></a>
            </nav>  
        </div>
    </header>
  
    <!-- SHOWCASE SECTION -->
    <section id="showcase">
        <div class="overlay"></div>
        <div class="container">
            <p class="up-title">BIOHOUSE START</p>
            <img src="{{asset('img/logo.png')}}"  width="150px" alt="">
            <h1 class="page-title">2021's Collection</h1>
            <a href="#products" class="cta cta-full">SHOP NOW</a>
        </div>
    </section>
    <!-- DESCRIPTION SECTION -->
    <section id="description">
        <div class="container">
            <p><b>Biohouse.ma</b>  est une boutique en ligne qui a pour objectif de permettre à toutes les beautés partout au Maroc de s’offrir les dernières nouveautés dans la cosmétique, en ne sacrifiant pas la qualité et à tous les budgets.

                <b>Biohouse.ma</b>  donnes accès à ses clientes la possibilité d’avoir des produits tendances, de hautes qualités et tout ce qui touche au maquillage, à la beauté et aux accessoires avec des prix raisonnables.</p>
        </div>
    </section>
    <!-- COLLECTION SECTION -->
    <section id="collection">
        <div class="container">
            <h2 class="section-tilte">Categories </h2>
            <hr class="sub-line">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="collection">
                        <div class="overlay"></div>
                        <img  src="img/horace.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="collection">
                        <div class="overlay"></div>
                        <img src="img/femme.jpg" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- PRODUCTS SECTION -->
    <section id="products">
        <div class="container">
            <h2 class="section-tilte">NOS PRODUITS</h2>
            <hr class="sub-line">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-sm-6">

                    <a href="#">
                        <div class="product">
                            <img  src="{{asset('/storage/uploads/'.$product->image)}}"  alt="product" class="product-img">
                            <p class="product-title"> {{$product->title}} ||<span class="price"> {{$product->price}} <b>DHS</b> </span></p>
                            


                            <a href="{{url('single/'.$product->id)}}"><i class="fas fa-eye"></i></a>
                        </div>
                    </a>
                </div>  
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- SINGLE PRODUCT SECTION -->
    <section id="single">
        <div class="container">
            <h2 class="section-tilte">Promotion Du Mois</h2>
            <hr class="sub-line">

            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <img src="img/ensemble-bouteille-parfum-pour-hommes-femmes-conceptions-emballages-produits-realistes_1268-2741.jpg" alt="product image" class="single-product-img">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-info">
                        <h1 class="title">Your Brand Men & Women </h1>
                        <p class="price"> <b>200 DHS</b>  </p>
                        <hr>
                        <div class="flex">
                           
                            <div  class="cta cta-out">ACHETER MAINTENANT</div>
                        </div>
                        <a href="{{url('single/5')}}" class="details-link">AFFICHIER LE PRODUIT <i class="fas fa-long-arrow-alt-right"></i></a>

                        <ul class="share-links">

                            <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        </ul>
                        <div>
                            <hr>
                            
                            <a href="#" class="details-link">PARTAGER <i class="fas fa-share"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SUBSCRIBE SECTION -->
    <section id="subscribe">
        <div class="container">
            <h2 class="section-tilte">CONTACTER NOUS MAINTENANT</h2>
            <hr class="sub-line">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Votre email" class="email">
                        <input type="message" name="message" placeholder="Votre message" class="email">
                        <button class="cta cta-full">Envoyer </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER SECTION -->
    <footer>
        <div class="container">
          <p>BIO HOUSE &copy; 2021 | All Rights Reserved | <i class="fab fa-facebook"></i> <i class="fab fa-instagram"></i> <i class="fab fa-twitter"></i> 
          </p>
        </div>
      </footer>
</body>
</html>
