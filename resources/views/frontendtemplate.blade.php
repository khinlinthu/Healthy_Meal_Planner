<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Healthy Food</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<<<<<<< HEAD
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="{{ asset('frontend_assets/ftco-32x32.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{ asset('frontend_assets/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.cs')}}s">
  </head>
  <body>
=======
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Healthy Meal Planner</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <script src="{{asset('frontend_assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('frontend_assets/js/jquery.min.js')}}"></script> 
>>>>>>> 5c70982e11bda11a3dea064b4a7279a528d9a3eb
    
  <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
<<<<<<< HEAD
          <a class="navbar-brand" href="">Healthy Meal Planner</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
               <li class="nav-item">
                <a class="nav-link" href="{{route('main_page')}}">Home</a>
               </li>
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
            </ul>

           <!--  <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul> -->
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    @yield('content')

     <footer class="site-footer" role="contentinfo">
      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
=======
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


    <section id="footer" style="background-color: #fff;">
        <div class="container">
>>>>>>> 5c70982e11bda11a3dea064b4a7279a528d9a3eb
            <div class="row">
              <div class="col-md-12 mb-3">
                <h3>Subsribe Newsletter</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ex temporibus magni ipsam inventore dolorum sunt, amet vel.</p>
              </div>

              <form action="" class="col-12 mb-5">
                <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
                <div class="col-md-4">
                  <input type="submit" class="btn btn-primary btn-block" value="Subscribe">
                </div>
<<<<<<< HEAD
=======
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
                                <li>
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
>>>>>>> 5c70982e11bda11a3dea064b4a7279a528d9a3eb
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Opening Hours</h3>
              <p><strong class="d-block font-weight-normal text-black">Sunday-Thursday</strong> 5AM - 10PM</p>
            </div>
            <div>
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Address:</span>
                  <span>34 Street Name, City Name Here, United States</span></li>
                <li class="d-block"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                <li class="d-block"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
              <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
          <small class="block">&copy; 2019 <strong class="text-black">Foody</strong> Free Template. All Rights Reserved. <br> Design by <a href="https://free-template.co/" target="_blank">Free-Template.co</a></small> 
          </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="{{asset('frontend_assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/aos.js')}}"></script>

    <script src="{{asset('frontend_assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/magnific-popup-options.js')}}"></script>
    

    <script src="{{asset('frontend_assets/js/main.js')}}"></script>
    
  </body>
</html>