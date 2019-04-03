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
        color: dimgrey;
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
    <h2 align="center" >Select The Platform</h2>

    <br>
    <div class="content-box-md">

        <div class="container">

            <div class="row">

                <div class="col-md-4 col-sm-4 wow fadeInLeft">
                    <!-- About item 01 -->
                    <a href="{{url('/gameselection')}}">
                    <div class="about-item text-center">
                            
                        
                        <h3>Desktop</h3>
                        <hr>
                        <p></p>
                    </div>
                </a>
                </div>
               
                <div class="col-md-4 col-sm-4  wow fadeInUp">
                    <!-- About item 02 -->
                    <a href="{{url('/gameselection')}}">
                    <div class="about-item text-center">
                           
                        
                       <h3>Xbox</h3>
                       <hr>
                        <p></p>
                    </div>
                </a>
                </div>

                <div class="col-md-4 col-sm-4  wow fadeInRight">
                    <!-- About item 03 -->
                    <a href="{{url('/gameselection')}}">
                    <div class="about-item text-center">
                            
                   
                            <h3>PS4</h3>
                            <hr>
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


@endsection