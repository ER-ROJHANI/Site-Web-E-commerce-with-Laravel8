<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    </head>
    <body>
    
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Products</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="">market</a></li>
            <li><a href="">nouvaute</a></li>
            <li><a href="">shop</a></li>
          </ul>
        </div>
      </nav>
          
           <div class="row" width="300">
            @foreach ($productList as $product)
            <div class="col s4">
              <div class="card">
                <div class="card-image">
                  <img class="materialboxed" width="150" height="250" src='image/{{$product->image}}'  alt="">
                  <span class="card-title"></span>
                </div>
                <div class="card-content center-align">
                  <p>{{$product->name}}</p>
                  <p></p>
                </div>
                <div class="card-action center-align">
                  <p>{{$product->price}} $<p>
                   <!-- <input type="range" id="test5" min="0" max="6" />  -->
                   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button type="submit" class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                    </form>
                   <!-- <a class="waves-effect waves-light btn-large">add to shop</a>  -->
                </div>
              </div>
            </div>
            @endforeach
          </div>
  
            

        <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>