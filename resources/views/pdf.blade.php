<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <style>
table {
  width: 100%;
  border-collapse: collapse;
  border: none;
}
td {
    border: 1px solid black;
    text-align: center;
}
   </style>
   </head>
   
   <body>
         <div class="container">
         <nav>

           DATE : <a style="text-decoration: none" href="" style="  margin-left: auto;"  class="navbar-brand">     <b style="color: black"> XX/XX/XXXX</b> </a>  </nav>
           <nav>

              NOM : <a style="text-decoration: none"  href="" style="  margin-left: auto;"  class="navbar-brand">      <b style="color: black">{{session('client')->nom}} {{session('client')->prenom}}</b> </a>  
           </nav>
           <nav>

              NUMERO : <a style="text-decoration: none"  href="" style="  margin-left: auto;"  class="navbar-brand">     <b style="color: black"> {{session('client')->numero}}</b> </a>  
           </nav>
           <nav>

              EMAIL : <a style="text-decoration: none"  href="" style="  margin-left: auto;"  class="navbar-brand">     <b style="color: black">{{session('client')->email}}</b> </a>  
           </nav>
        
         
<center>
            
               <img src="img/logo.png" width=300px">
         </center>

      <center>
 
       
         
     <hr style="color: pink">
         <p>VOTRE FACTURE : </p>
        </center>
        
         <div class="container py-5 my-5">
            <div class="row">
               <div class="col-mg-6">
                  <table  border="1" style="margin: auto; width:100%">
                     <tr>   
                      <th> NOM PRODUIT</th>

                        
                        <th> PRIX </th>
                     </tr>
                     @foreach ($products as $product)
                     <tr>
                        <td>
                           {{ $product->title }}
                        </td>
                        <td>
                           {{ $product->price }}
                        </td>
                     </tr>
                     @endforeach
                     @php
                         $prix = App\Calc::total($products) ;
                         $tva  = $prix*0.2 ; 
                         $prixttc = $prix + $tva ;
                     @endphp
                     <tr class="calc" >
                        <th>PRIX HORS TAXE </th>
                        <th>{{ $prix }} <b>MAD</b> </th>
                     </tr>
                     <tr class="calc" >
                        <th>TVA (20%) </th>
                        <th> {{ $tva }} <b>MAD</b> </th>
                     </tr>
                     <tr class="calc" >
                        <th>PRIX TTC</th>
                        <th>{{  $prixttc  }} <b>MAD</b> </th>
                     </tr>
                  </table>
               </div>
               
            </div><hr style="margin: 50px;color:pink">
               <center>
                   <p style="border: 2px black solid"  style="margin: 50px">MERCI POUR VOTRE CONFIANCE </p>
                  </center>
         </div>
         <center>
          <footer>
            <div class="container">
               <p>BIO HOUSE &copy; 2021 | All Rights Reserved</p>
            </div>
         </footer>  
         </center>




         
         
   </body>
</html>