<!DOCTYPE html>
<html class="no-js">
    <head>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Healthy Meal Planner</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.css')}}">
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="{{asset('frontend_assets/css/bootstrap.min.css')}}">
        <!-- Font-awesome.min css -->
        <link rel="stylesheet" href="{{asset('frontend_assets/css/font-awesome.min.css')}}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{asset('frontend_assets/css/animate.min.css')}}">

        <link rel="stylesheet" href="{{asset('frontend_assets/css/main.css')}}">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="{{asset('frontend_assets/css/responsive.css')}}">

      
        
        <!-- Js -->
    <script src="{{asset('frontend_assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="{{asset('frontend_assets/js/vendor/jquery-1.10.2.min.js')}}"><\/script>')</script>
    <script src="{{asset('frontend_assets/js/jquery.nav.js')}}"></script>
    <script src="{{asset('frontend_assets/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('frontend_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend_assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/main.js')}}"></script>
   <!--  <script src="{{asset('frontend_assets/js/bootstrap.bundle.min.js')}}"></script> -->
   <!--  <script src="{{asset('frontend_assets/js/jquery.min.js')}}"></script> -->
    
    <script type="text/javascript" src="{{asset('my_asset/js/custom.js')}}"></script>


    <link rel="stylesheet" type="text/css" href="{{asset('my_asset/css/style.css')}}">
    </head>
    <body>
    <!--
    header-img start 
    ============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="{{asset('frontend_assets/images/header.jpg')}}" alt="">
    </section>
    <!--
    Header start 
    ============================== -->
    <nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="#">
                                    <img src="{{asset('frontend_assets/images/real2.png')}}" alt="Logo" style="width: 140px;height: 140px;margin-top: -59px; margin-left: -30px; ">
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">


                                <li class="nav-item"><a class="nav-link" href="{{route('main_page')}}">Home</a></li>
                                 <li class="nav-item"><a class="nav-link" href="{{route('cartpage')}}">Checkout</a></li>

                                @auth
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                                  @else
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{route('signinpage')}}">Signin</a>
                                  </li>
                                
                                  @endauth

                               <!--  <li class="nav-item"><a class="nav-link" href="{{route('contactpage')}}">contacts</a></li> -->

                           


                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </nav><!-- header close -->

    @yield('content')


    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                  <h4><i class="fa fa-phone"></i>Telephone</h4>
                                  <p>09-893897869 | 09-7643892997</p>
                                    
                                </li>
                                <li>
                                  <h4><i class="fa fa-map-marker"></i>Address</h4>
                                  <p>Sanchung Pathein street,Yangon Myanmar</p>
                                </li>
                                <li>
                                  <h4><i class="fa fa-envelope"></i>E mail</h4>
                                  <p>healthyplan@gmailcom - info@mail.ru</p>
                                  
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="700ms">
                        <h3>LATEST <span>Our Webiste</span></h3>
                        <div class="blog">
                            <ul>
                                <li>
                                    <p>Our Healthy Meal Planner will help you find the recipe that suits your personal needs.</p>
                                </li>
                            </ul>                
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="gallary">
                            <h3>PHOTO <span>STREAM</span></h3>
                            <ul>

                                <li>
                                    <a href="#"><img src="{{asset('frontend_assets/images/photo/photo-1.jpg')}}" alt=""></a>

                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend_assets/images/photo/photo-2.jpg')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend_assets/images/photo/photo-3.jpg')}}" alt=""></a>
                                </li>
                        
                                     <a href="#"><img src="{{asset('frontend_assets/images/photo/photo-4.jpg')}}" alt=""></a>
                                </li>

                          </ul>

                        </div>
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2020 - All Rights Reserved.Design and Developed By HealthyMealPlanner</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @yield('script')
    </body>
</html>
