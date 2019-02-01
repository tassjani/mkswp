<?php get_header(); ?>
              <!-- dropdown nav menu -->
              <div id="navbar">
                    <div class="site-header-2 header-top align-items-center">
                        <div class="site-logo-2">
                            <a href="index.html">
                                <img class="img-fluid-2" width="auto" height="52" class="d-inline-block align-top" src="img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                <div class="container"> 
                    <?php
                        if ( have_posts() ) {
                             while ( have_posts() ) {
                            the_post();
                             get_template_part( 'template-parts/content', get_post_format() );
                             }
                        }
                    ?>
                    <div class="row align-items-center justify-content-center d-flex">
                      <nav id="nav-menu-container">
                        <ul class="nav-menu-2">
                          <li class="menu-active-2"><a href="index.html">Home</a></li>
                          <li><a href="about.html">About</a></li>
                          <li class="menu-has-children"><a href="services.html">Services</a>
                            <ul>
                                <li><a href="">Psychotherapy Counseling</a></li>
                                <li><a href="">Life Coaching</a></li>
                                <li><a href="">Wellness Training</a></li>
                                <li><a href="">Facilitative Session</a></li>
                            </ul>
                          </li>                           
                          <li><a href="">Gallery</a></li>
                          <li class="menu-has-children-2"><a href="">Blog</a>
                            <ul>
                              <li><a href="">Blog Home</a></li>
                              <li><a href="">Blog Single</a></li>
                            </ul>
                          </li> 
                          <li><a href="">Contact</a></li>
                        </ul>
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </div>

            <!-- start banner Area -->
            <section class="banner-area" id="home" data-parallax="scroll" data-image-src="https://images.unsplash.com/photo-1496902526517-c0f2cb8fdb6a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" data-natural-width=4000 data-natural-height=3000 data-position-y=center>  
                    <div class="overlay-header"></div>
                <div class="container">             
                    <div class="row fullscreen align-items-center justify-content-start">
                        <div class="banner-content" data-aos="fade-up" data-aos-duration="1800">
                            <h6>Motivation Knowledge Solution</h6>
                            <h1 class="text-white">
                                Solving problems are all<br>
                                about people.
                            </h1>
                            <a href="#" class="genric-btn circle">Book Consultancy</a>
                        </div>          
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    

            <!-- Start callto Area -->
            <section class="calltotop-area pt-70 pb-70">
                <div class="container">
                    <div class="callto-section">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 call-left no-padding">
                                <p>
                                    Start <span>planning</span> your <br>
                                    New <span>Dream</span>
                                </p>
                            </div>
                            <div class="col-lg-5 call-middle">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                                </p>
                            </div>
                            <div class="col-lg-3 call-right justify-content-end d-flex">
                                <a href="#" class="call-btn">Book Consultancy</a>
                            </div>
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End callto Area -->
            <!-- Start feature Area -->
            <section class="feature-area section-gap" id="service" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="400">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-9 pb-40 header-text">
                            <h1>Our Services</h1>
                            <p>
                                Who are in extremely love with eco friendly system.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-user"></span>Psychotherapy Counseling</h4>
                                <p>
                                    We are working to assist client in overcoming problems 
                                    that hinder daily performance, with short and longterm therapy.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-license"></span>Life Coaching</h4>
                                <p>
                                    By doing life coaching, we are intended to
                                    help people in setting goals and making plans
                                    to achieve goals, both in groups and
                                    individually.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-phone"></span>Wellness Training</h4>
                                <p>
                                    We provide two programs in our wellness
                                    training service, the Corporate Wellness
                                    Training Program and TetraMap Facilitation
                                    Training.
                                </p>                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-feature">
                                <h4><span class="lnr lnr-rocket"></span>Facilitative Sessions</h4>
                                <p>
                                    With facilitative approach, we
                                    help clients to plan, guide and solve
                                    problems, and ensure that the group's goals
                                    are met effectively.        
                                </p>        
                            </div>
                        </div>              
                    </div>
                </div>  
            </section>
            <!-- End feature Area -->   
            <section class="home-about-area" id="about" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="200">
                <div class="container-fluid">               
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 no-padding home-about-left">
                            <img class="img-fluid-3 relative" src="https://images.unsplash.com/photo-1455734729978-db1ae4f687fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="img">
                        </div>
                        <div class="col-lg-6 no-padding home-about-right">
                            <h1>About Us</h1>
                            <p>
                                <span>We are here to listen from you deliver exellence</span>
                            </p>
                            <p>
                                MKS was established to help people on reaching their full potential through psychotherapy counselling,life coaching, wellness training, and facilitative sessions. MKS itself stands for motivation, knowledge, and solution. Our sessions are based on the six dimensions of wellness, including emotional, occupational, physical, social, intellectual, and spiritual areas.
                            </p>
                            <a class="text-uppercase primary-btn" href="about.html">Get Details  <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>  
            </section>
            <!-- <section class="about-top-area section-gap">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 about-top-left">
                            <h1>
                                Everything <br>
                                You can imagine <br>
                                is right here
                            </h1>
                            <p>MKS was established to help people
                                on reaching their full potential through
                                psychotherapy counselling,life coaching,
                                wellness training, and facilitative
                                sessions. MKS itself stands for
                                motivation, knowledge, and solution.
                                Our sessions are based on the six
                                dimensions of wellness, including
                                emotional, occupational, physical, social,
                                intellectual, and spiritual areas.<br><br>
                                Our professionals are equipped with
                                internationally recognized tools, namely
                                Neuro-Linguistic Programming (NLP),
                                TetraMap, Points of You, and Paul
                                Ekman International Emotional Skills &
                                Credibility Analysis to improve client’s
                                personal and organizational
                                development.</p>
                        </div>
                        <div class="col-lg-6 about-top-right">
                            <img class="img-fluid" src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="MKS Learning">
                        </div>
                    </div>
                </div>  
            </section> -->
            <!-- Start review Area -->
            <section class="review-area section-gap" id="review" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="400">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-9 pb-40 header-text text-center">
                            <h1 class="pb-10">Our happy clients</h1>
                            <p>
                                Who are in extremely love with eco friendly system.
                            </p>
                        </div>
                    </div>                  
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="slider-image-wrapper">
                                <div class="client-logo">
                                    <a href="#"><img src="img/clientlog/logo_0000_unilever.png"></a>
                                </div>
                                <div class="client-logo">
                                    <a href="#"><img src="img/clientlog/logo_0006_Gudang_Garam_TBK_logo.png"></a>
                                </div>
                                <div class="client-logo">
                                    <a href="#"><img src="img/clientlog/logo_0010_arnotts.png"></a>
                                </div>
                                <div class="client-logo">
                                    <a href="#"><img src="img/clientlog/logo_0007_bodysho.png"></a>
                                </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="slider-image-wrapper">
                                <div class="client-logo">
                                    <a href="#"><img src="img/clientlog/logo_0002_prudential.png"></a>
                                </div>
                                <div class="client-logo">
                                    <a href="#"><img src="img/clientlog/logo_0008_bankbca.png"></a>
                                </div>
                                <div class="client-logo">
                                    <a href="#"><img src="img/clientlog/logo_0005_logo_mtg.png"></a>
                                </div>
                                <div class="client-logo">
                                    <a href="#"><img src="img/clientlog/logo_0001_Reksadana.png"></a>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>  
            </section>
            <!-- End review Area -->


            <!-- Start brand Area -->
            <section class="brand-area pt-100">
                
            </section>
            <!-- End brand Area -->     

            <!-- Start latest-blog Area -->
            <section class="latest-blog-area section-gap" id="blog" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="400">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Latest News from our Blog</h1>
                                <p>Who are in extremely love with eco friendly system.</p>
                            </div>
                        </div>
                    </div>                  
                    <div class="row">
                        <div class="col-lg-6 single-blog">
                            <img class="img-fluid" src="img/b1.jpg" alt="">
                            <ul class="tags">
                                <li><a href="#">Read More</a></li>
                            </ul>
                            <a href=""><h4>Portable latest Fashion for young women</h4></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                            </p>
                            <p class="post-date">31st January, 2018</p>
                        </div>
                        <div class="col-lg-6 single-blog">
                            <img class="img-fluid" src="img/b2.jpg" alt="">
                            <ul class="tags">
                                <li><a href="#">Read More</a></li>
                            </ul>
                            <a href=""><h4>Portable latest Fashion for young women</h4></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
                            </p>
                            <p class="post-date">31st January, 2018</p>
                        </div>                      
                    </div>
                </div>  
            </section>
            <!-- End latest-blog Area -->       

            <!-- Start callto Area -->
            <section class="callto-area section-gap relative">
                <div class="overlay overlay-bg"></div>  
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <h1 class="text-white">Look No Further. Try us today!</h1>
                            <p class="text-white pt-20 pb-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore <br> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            </p>
                            <a class="primary-btn" href="#">Book Consultancy</a>                            
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End callto Area -->
        <?php get_footer(); ?>
