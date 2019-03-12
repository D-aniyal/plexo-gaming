@extends('layout.app')

@section('content')

 <!-- Home -->
 <section id="home">

    <!-- Background Video -->
    <video id="home-bg-video" poster="video/solo.jpg" autoplay loop muted>
        <source src="video/RAGE 2.mp4" type="video/mp4">
        <source src="video/RAGE 2.mp4" type="video/ogg">
        <source src="video/RAGE 2.mp4" type="video/webm">
    </video>

    <!-- Overlay -->
    <div id="home-overlay"></div>

    <!-- Home Content -->
    <div id="home-content">

        <div id="home-content-inner" class="text-center">

            <div id="home-heading">
                <h1 id="home-heading-1">HEADER</h1><br>
                <h1 id="home-heading-2">FOR <span>PROMOTIONS</span></h1>
            </div>

            <div id="home-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam in nihil minima unde qui nihil minima.</p>
            </div>

            <div id="home-btn">
                <a class="btn btn-general btn-home smooth-scroll" href="#about" title="Start Now" role="button">Start Now</a>
            </div>

        </div>

    </div>

    <!-- Arrow Down -->
    <a href="#about" id="arrow-down" class="smooth-scroll">
        <i class="fa fa-angle-down"></i>
    </a>

</section>
<!-- Home Ends -->

<!-- About -->
<section id="about">


    <!-- About 02 -->
    <div id="about-02">

        <div class="content-box-md">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 col-sm-4 wow fadeInLeft">
                        <!-- About item 01 -->
                        <div class="about-item text-center">
                           
                            <h3>Active Tournaments</h3>
                            <hr>
                            <p>(Twitch Stream)</p>
                        </div>

                    </div>
                   
                    <div class="col-md-6 col-sm-4  wow fadeInRight">
                        <!-- About item 03 -->
                        <div class="about-item text-center">
                          
                            <h3>Upcomming Tournaments</h3>
                            <hr>
                            <p>Fortnite, February 27, 2019 6PM GST (Sign Up)</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- About 02 Ends -->

</section>
<!-- About Ends -->



<!-- Portfolio -->
<section id="portfolio">

    <div class="content-box-md">

        <div class="container">

            <div class="row">

                <div class="col-md-12 wow slideInLeft">

                

                </div>

            </div>

        </div>
        <section id="portfolio">
            <h3 h3 style= "color: rgb(252, 252, 252); font-weight: bold" Align= "center">Select The Game</h3>
        <br>
            <!-- Portfolio Items Wrapper -->
        <section id="portfolio-wrapper" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="container-fluid">

                <div class="row no-gutters">
                 
                    <div id="isotope-container">
                      
                        <div class="col-md-3 col-sm-6 col-xs-12 desktop">
                          
                            <!-- Portfolio Item 01 -->
                            <div class="portfolio-item">

                                <a href="img/portfolio/001.jpg" title="Add Description">
                                    <img src="img/portfolio/001.jpg" class="img-responsive" alt="portfolio 01">

                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">

                                            <!-- Item Header -->
                                            <h3>COD 3</h3>

                                            <!-- Item Strips -->
                                            <span></span>

                                            <!-- Item Description -->
                                            <p>Ps4, Xbox</p>

                                        </div>

                                    </div>
                                </a>

                            </div>

                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 web">
                            <!-- Portfolio Item 02 -->
                            <div class="portfolio-item">

                                <a href="img/portfolio/002.jpg" title="Add Description">
                                    <img src="img/portfolio/002.jpg" class="img-responsive" alt="portfolio 02">

                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">

                                            <h3>COD 3</h3>

                                            <!-- Item Strips -->
                                            <span></span>

                                            <!-- Item Description -->
                                            <p>Ps4, Xbox</p>

                                        </div>

                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 web mobile logo">
                            <!-- Portfolio Item 03 -->
                            <div class="portfolio-item">

                                <a href="img/portfolio/003.jpg" title="Add Description">
                                    <img src="img/portfolio/003.jpg" class="img-responsive" alt="portfolio 03">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <h3>COD 3</h3>

                                            <!-- Item Strips -->
                                            <span></span>

                                            <!-- Item Description -->
                                            <p>Ps4, Xbox</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 logo web">
                            <!-- Portfolio Item 04 -->
                            <div class="portfolio-item">

                                <a href="img/portfolio/004.jpg" title="Add Description">
                                    <img src="img/portfolio/004.jpg" class="img-responsive" alt="portfolio 04">
                                    <div class="portfolio-item-overlay">
                                        <div class="portfolio-item-details text-center">
                                            <!-- Item Header -->
                                            <h3>COD 3</h3>

                                            <!-- Item Strips -->
                                            <span></span>

                                            <!-- Item Description -->
                                            <p>Ps4, Xbox</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        
                    
                     

                    </div>

                </div>

            </div>

        </section>
    </section>
    </div>

</section>
<!-- Portfolio Ends -->




@endsection