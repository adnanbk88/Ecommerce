<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet"  href="{{asset('css/style.css') }}">    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous"> 

    <title>ADMIN/EDITE</title>
</head>
<body>
  

      @if (count($errors))
    

      <div class="alert alert-danger" role="alert">
      <ul>
      
          
      @foreach ($errors->all() as $message)
      <li> {{ $message }}</li>
       @endforeach
      </ul>
        </div>
      @endif
    </section>
<div class="container">
  <div class="row">
     <div class="col-md-12">



     <form action="{{ url('admin/'.$product->id. '/edite') }} " method="post">
      <input type="hidden" name="_method" value="PUT">

  @csrf
  @method('PUT')
             <div class="form-group">
                 <label for="">Titre</label>
                 <input type="text" name="titre" class="form-control" value="{{ $product->titre }}">
              </div>

             <div class="form-group">
                 <label for="">Description</label>
                 <textarea type="text" name="description" class="form-control" value="{{ $product->description }}"> </textarea>
              </div>
             <div class="form-group">
                 <label for="">Prix</label>
                 <textarea type="number" name="price" class="form-control" value="{{ $product->price }}"> </textarea>
              </div>
             <div class="form-group">
                 <label for="">Instock</label>
                 <textarea type="number" name="inStock" class="form-control" value="{{$product->inStock}}"> </textarea>
              </div>
             <div class="form-group">
                 <label for="">Categorie</label>
                 <select id="Categorie" name="category" class="form-control">
                  <option selected>CHOISIR</option>
                  <option value="1">HOMME</option>
                  <option value="2">FEMME</option>
                </select>                </div>
          
             <div class="form-group">
                 <label for="">image</label>
                 <img src="{{asset('/storage/uploads/'.$product->image)}}" width="25%" alt="...">
                <input type="file">
                 
              </div>
          
              <div class="form-group">
                 <center>

                   <input type="submit" class="form  btn btn-success m-3"  value="MODIFIER">
                 </center>
               </div>
         </form>
     </div>
  </div>
</div>
      <section>
        

<footer>
    <div class="container">
      <p>BIO HOUSE &copy; 2021 | All Rights Reserved</p>
    </div>
  </footer>
</body>
</html>