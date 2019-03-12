@extends('layout.app')

@section('content')
<style>
    .bg-primary {background-color:#262727;}
    
    h4{
        color: azure
    }
    h3{
    color: azure;
    }
    </style>

<br>
<br>

<br>
<br>

<!-- Clients -->


    <div class="content-box-sm">

        <div class="container">

            <div class="row">
                    <div class="col-md-2 text-center">
                            <h4></strong></h4>
                         </div>
                    <div class="col-md-4 ">
                            <h4>Selected Game</strong></h4>
                         </div>
                <div class="col-md-6 text-center">
                    <h4>Select the <strong>Game Platform</strong></h4>
                 </div>

            </div>

            <div class="row wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-6 text-center">
                            <img src="img/client/client-1.jpg" class="" alt="" height="150" width="150">
                         </div>
            
                        <div class="col-md-2">
                                <div class="card text-center  text-white mb-3">
                                  <div class="card-body">
                                  
                                    <h4 class="display-2">
                                      <img src="img/PC.jpeg"  alt="" height="150" width="100">
                                      
                                    </h4>
                                    <h3>PC</h3>
                                  </div>
                                </div>
                               </div>
                               <div class="col-md-2">
                                <div class="card text-center  text-white mb-3">
                                  <div class="card-body">
                                  
                                    <h4 class="display-2">
                                      <img src="img/PS4.jpg"  alt="" height="150" width="100">
                                      
                                    </h4>
                                    <h3>PS4</h3>
                                  </div>
                                </div>
                               </div>
                               <div class="col-md-2">
                                <div class="card text-center  text-white mb-3">
                                  <div class="card-body">
                                  
                                    <h4 class="display-2">
                                      <img src="img/Xbox.jpg"  alt="" height="150" width="100">
                                      
                                    </h4>
                               <h3>xBOX</h3>
                                  </div>
                                </div>
                               </div>
                        
                                    
                        
                             

        

            </div>

        </div>

    </div>
    <div class="container">
            <div class="row">
          
                <div class="col-md-2">

                </div>
          
                <div class="col-md-4">
                        <h4>Number of Players:</h4>
                    <div  class="card text-center ">
                      
                  
                     
                      <div class="card-body">
                        
                        <a href="#" class="btn btn-primary btn-block mt-2">1 v 1</a>
                      </div>
                     
                    </div>
                    <div  class="card text-center ">
                        
                    
                       
                        <div class="card-body">
                          
                          <a href="#" class="btn btn-primary btn-block mt-2">2 v 2</a>
                        </div>
                       
                      </div>
                      <br>
                    
                  </div>
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-2">
                    <a href="{{url('/createteam')}}" class="btn btn-primary btn-block mt-2">Next</a>
                  </div>
               
              </div>
                         
                      </div>


<!-- Clients Ends -->
<br>
<br>


@endsection