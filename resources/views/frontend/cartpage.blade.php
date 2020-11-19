    
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Healthy food</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="{{asset('frontend_assets/ftco-32x32.png')}}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend_assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontend_assets/css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{asset('frontend_assets/fonts/ionicons/css/ionicons.min.css')}}">
 <!--    <link rel="stylesheet" href="{{asset('frontend_assets/fonts/fontawesome/css/font-awesome.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('frontend_assets/fonts/flaticon/font/flaticon.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('frontend_assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('my_asset/css/myassetstyle.css')}}">
    <link rel="stylesheet" href="{{asset('my_asset/font.css')}}">
    <link rel="stylesheet" href="{{asset('my_asset/fontawesome/css/all.min.css')}}">


  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn ">
                <a class="nav-link" href="" >Healthy Meal Planner</a>
              </li>
            </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0 healthy">
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

                      <a class="dropdown-item" href="{{route('history')}}">Order History</a>
                  </div>
                 </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('signinpage')}}">Signin</a>
                  </li>
                
                  @endauth
            </ul>

             <!-- <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href=".contact">Contact Us</a>
              </li>
            </ul> -->
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

   <div class="slider-wrap">
      <section class="home-slider owl-carousel">


        <div class="slider-item" style="background-image: url('my_asset/images/healthy.jpg'); ">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up" style="font-family: squada;">Enjoy Your Day At Here!</h1>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Welcome</a></p>
              </div>
            </div>
          </div>

        </div>

        <div class="slider-item" style="background-image: url('my_asset/images/healthy.png');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Delecious and Healthy</h1>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Welcome</a></p>
              </div>
            </div>
          </div>
          
        </div>

      </section>
    <!-- END slider -->
    </div> 

      <section class="section  pt-5 top-slant-white2 relative-higher bottom-slant-gray">
      
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
                  <div class="row mt-5 shoppingcart_div">
                    <div class="col-12">
                      <a href="index.php" class="btn mainfullbtncolor btn-outline-secondary float-right px-3" > 
                        <i class="icofont-shopping-cart"></i>
                        Continue Shopping 
                      </a>
                    </div>
                  </div>


                <form method="" action="" class="checkout">
                  <div class="row mt-5 shoppingcart_div">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>

                            <th colspan="2"> FoodPackages</th>
                            <th colspan="3"> Qty</th>
                            <th>Price</th>
                            <th>Subtotal</th>

                          </tr>
                        </thead>
                          <tbody id="shoppingcart_table">
                            

                          </tbody>
                        
                          <tfoot id="shoppingcart_tfoot">
                            
                            <tr> 
                              <td colspan="5"> 
                                <textarea class="form-control notes" placeholder="Any Request..." required></textarea>
                              </td>
                              <td colspan="3">
                               
                               @role('customer')
                                <button class="btn btn-secondary btn-block mainfullbtncolor"> 
                                  Check Out 
                                </button>
                                @else
                                <button class="btn btn-secondary btn-block mainfullbtncolor"> <a href="{{route('signinpage')}}"></a>
                                   Please Signin 
                                </button>
                                @endrole
                              </td>

                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>

                </form>
    
          </div>
          
        </div>
      </div>

    </section>
 


    <footer class="site-footer" role="contentinfo" style="background-color: #fff;">
      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="row">
              <div class="col-md-12 mb-3">
                <h3>Subsribe Newsletter</h3>
              </div>

              <form action="" class="col-12 mb-5">
                <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
                <div class="col-md-4">
                  <input type="submit" class="btn btn-primary btn-block" value="Subscribe">
                </div>
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
            <p class="mb-5 fruit">A healthy meal plan will also lower your risk for heart disease and other health conditions.</br>A healthy meal plan:Emphasizes vegetables, fruits, whole grains, and fat-free or low-fat dairy products Includes lean meats, poultry, fish, beans, eggs, and nuts.</p>
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
              <p class="fruit"><strong class="d-block font-weight-normal text-black">Sunday-Thursday</strong> 5AM - 10PM</p>
            </div>
            <div>
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black fruit">Address:</span>
                  <span  class="fruit">34 Street Name, City Name Here, United States</span></li>
                <li class="d-block"><span class="d-block text-black fruit">Phone:</span><span  class="fruit">+1 242 4942 290</span></li>
                <li class="d-block"><span class="d-block text-black fruit">Email:</span><span  class="fruit">info@yourdomain.com</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li  class="fruit"><a href="#">About</a></li>
              <li  class="fruit"><a href="#">Terms of Use</a></li>
              <li  class="fruit"><a href="#">Disclaimers</a></li>
              <li  class="fruit"><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
              <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
          <small class="block">&copy; 2020 <strong class="text-black">Healthy Meal Planner</strong></small> 
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
  <!--   <script src="{{asset('frontend_assets/js/bootstrap.bundle.min.js')}}"></script> -->
    <script src="{{asset('my_asset/js/custom.js')}}"></script>
    <script src="{{asset('my_asset/js/bmi.js')}}"></script>
</body>
</html>
  <script type="text/javascript">
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

    $(document).ready(function () {
        $('.checkout').submit(function(e){
          let notes = $('.notes').val();
          if (notes === "") {
            return true;
          }else{
            let order = localStorage.getItem('foodpackage'); // JSON String
            console.log(order);
            $.post("{{route('order.store')}}",{order:order,notes:notes},function (response) {
              alert(response.msg);
              // localStorage.clear();
              // location.href="/";
            })
            e.preventDefault();
          }
        })
      })
  </script>
 
