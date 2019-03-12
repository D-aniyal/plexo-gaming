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
        color: azure;
    }
    p{
        color: azure;
    }
    h4{
        color: azure;
    }
    </style>

<br>
<br>
<br>
<br>
    
  <!-- Home -->
  
    <br>
    
        
        
  <!-- About 02 -->
  <div id="home">
        <div class="container"  >
            <header id="main-header">
              <br>
                <div class="row ">
               
           
                  <div class=" col-md-6">
               
                   <h3> Match</h3>
                   <a href="/PlexoGaming/public/createteam" class="btn btn-primary ">Create Team</a>
                   <a href="" class="btn btn-primary ">View Rules</a>
                </div>
                
                  <div class=" col-md-3 ml-auto">
                    <div class="d-flex flex-column">
                      </div>
          <br>
                    </div>
                  </div>
                  </header>
                </div>
                <br>
                <br>
               
                <div class="container ">
                    <div class="row">
                        <h3>Info</h3>
                        <div class="col-md-4">
                  <h4 class="ml-3"><u>Match id:</u> <p class="pull-right"><u>status:</u> <br> pending
                  </p></h4>
                  <p >#00000</p>
                    </div>
                </div>
                <div class="row">
                        <h3>Rules</h3>
                        <div class="col-md-4">
                  <h4 class="ml-3"><u>Host</u> <p class="pull-right"><u>map</u> <br> pending
                  </p></h4>
                  <p >callusturtles</p>
                    </div>
                </div>
                    <div class="col-md-4">
                            <h4 class="ml-3"><u>Match sel</u> <p class="pull-right"><u>gametype</u> 
                            </p></h4>
                            <p >best of 3</p>
                              </div>
               <br>
               <br>
               <br>
               <br>
                <div class="row">
                        <h3>Roster</h3>
                        <div class="col-md-4">
                  <h4 class="ml-3"><u>username</u> <p class="pull-right"><u>Gamertage</u> <br>Little one
                  </p></h4> 
                  <p >Xboxboy</p>
                    </div>
                </div>
  
                  
  
                 
                  </div>
                </div>
              </div>
<!-- About 02 Ends -->

 
     
 
    <br>
</div>
<br>


@endsection