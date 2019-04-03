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
    
    </style>

<br>
<br>
<br>
<br>
    
  <!-- Home -->
  
    <br>
    
        
        
  <!-- About 02 -->
  <div id="about-02">
      <br>
    <h2 align="center" >Select The Game</h2>

    <br>
    <div class="content-box-md">

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-sm-4 wow fadeInLeft">
                    <!-- About item 01 -->
                    <a href="{{url('/gamefilter')}}">
                    <div class="about-item text-center">
                            <img src="img/client/FORTNITE.png" class="" alt="" height="42" width="42">
                        <hr>
                        <h3>FORTNITE</h3>
                   
                        <p></p>
                    </div>
                </a>
                </div>
               
                <div class="col-md-4 col-sm-4  wow fadeInUp">
                    <!-- About item 02 -->
                    <a href="{{url('/gamefilter')}}">
                    <div class="about-item text-center">
                            <img src="img/client/download.jpg" class="" alt="" height="42" width="42">
                        <hr>
                       <h3>FIFA</h3>
                    
                        <p></p>
                    </div>
                </a>
                </div>

                <div class="col-md-4 col-sm-4  wow fadeInRight">
                    <!-- About item 03 -->
                    <a href="{{url('/gamefilter')}}">
                    <div class="about-item text-center">
                            <img src="img/client/download (1).jpg" class="" alt="" height="42" width="42">
                        <hr>
                            <h3>APEX LEGENDS</h3>
                      
                        <p></p>
                    </div>
                </a>
                </div>


            </div>

        </div>

    </div>

</div>
<!-- About 02 Ends -->

 
     
 
    <br>
</div>
<br>
<br>

@endsection