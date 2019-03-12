@extends('layout.app')

@section('content')
<style>

    .bg {
      /* The image used */
      background-image: url("img/support bg.png");
    
      /* Full height */
      height: 100%; 
    
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    h3{
      color: azure
    }
    table tr, th,td{
        color: azure
    }
    h1 {
      color: azure
    }
    h2{
      color: azure
    }
    </style>

<br>
<br>


<!-- SERVICES SECTION -->
<section style="background-color: #1f1e1e;" id="services" class="py-5">
<div class="container">

<div class="row">
<br>
<br>
<br>
<br>
<br>

<h1 align="center">Shop</h1>
<br>
<div class="col-md-4">
 
<div  class="card text-center ">
    <div class="card text-center bg-primary text-white ">
        <div class="card-body">
            <br>
          <h2 class="display-4">
             Buy Credits 
          </h2>
       
        </div>
      </div>
  <br>
  <div class="card-header ">
      <ul class="nav navbar-nav ml-auto">
                    
          <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy # Cradits <span class="caret"></span></a>
               
                  <ul class="dropdown-menu">
                    
                    <li role="separator" class="divider"></li>
                    <li><a href="">10 point</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">20 points</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">30 points</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="">40 points</a></li>
                  </ul>
                </li>
            </ul>
    </div>
    <br>
    <br>
    <br>
    <div class="card-body">
    
      <a href="#" class="btn btn-primary btn-block mt-2">Add to cart</a>
      </div>
 
</div>
</div>

<div class="col-md-4">
  <div class="card text-center">
      <div class="card text-center bg-primary text-white ">
          <div class="card-body">
          <br>
            <h2 class="display-4">
               Buy Cash 
            </h2>
          
          </div>
        </div>
    <br>
    <div class="card-header ">
        <ul class="nav navbar-nav ml-auto">
                      
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Select the amount <span class="caret"></span></a>
                 
                    <ul class="dropdown-menu">
                      
                      <li role="separator" class="divider"></li>
                      <li><a href="">$10 </a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="">$20 </a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="">$30 </a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="">$40 </a></li>
                    </ul>
                  </li>
              </ul>
      </div>
      <br>
      <br>
      <br>
      <div class="card-body">
      
        <a href="#" class="btn btn-primary btn-block mt-2">Add to cart</a>
        </div>
   
  </div>
</div>

<div class="col-md-4">
    <div class="card text-center">
        <div class="card text-center bg-primary text-white ">
            <div class="card-body">
            <br>
              <h2 class="display-4">
             Go Premium
              </h2>
           
            </div>
          </div>
      <br>
      <div class="card-header ">
          <ul class="nav navbar-nav ml-auto">
                        
              <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Select membership length <span class="caret"></span></a>
                   
                      <ul class="dropdown-menu">
                        
                        <li role="separator" class="divider"></li>
                        <li><a href="">1 month </a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="">2 month </a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="">3 month </a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="">4 month </a></li>
                      </ul>
                    </li>
                </ul>
        </div>
        <br>
        <br>
        <br>

      <div class="card-body">
      
        <a href="#" class="btn btn-primary btn-block mt-2">Add to cart</a>
        </div>
    </div>
</div>
</div>


</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</section>


@endsection