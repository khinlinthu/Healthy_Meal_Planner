 
@extends('frontendtemplate')

@section('content')

<<<<<<< HEAD
    <div class="slider-wrap">
      <section class="home-slider owl-carousel">
=======
 <section id="slider" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Featured <span>Works</span></h3>
                        </div>
                         <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="img-responsive" src="{{asset('frontend_assets/images/slider/slider-img-1.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('frontend_assets/images/slider/slider-img-2.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('frontend_assets/images/slider/slider-img-3.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('frontend_assets/images/slider/slider-img-4.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('frontend_assets/images/slider/slider-img-1.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('frontend_assets/images/slider/slider-img-2.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('frontend_assets/images/slider/slider-img-3.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="{{asset('frontend_assets/images/slider/slider-img-4.jpg')}}" alt="">
                            </div>
                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
>>>>>>> 5c70982e11bda11a3dea064b4a7279a528d9a3eb


        <div class="slider-item" style="background-image: url('frontend_assets/img/hero_1.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Enjoy Your Day At Healthy Food</h1>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Welcome</a></p>
              </div>
            </div>
          </div>

        </div>

        <div class="slider-item" style="background-image: url('frontend_assets/img/hero_2.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Healthy Food</h1>
                
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Welcome</a></p>
              </div>
            </div>
          </div>
          
        </div>

      </section>
    <!-- END slider -->
    </div> 
    

    <section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-dinner d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Enjoy Eating</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Fresh Sea Foods</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Cup of Coffees</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Meat Eaters</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
      </div>
    </section>
    

    <section class="section pb-0">
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
              <h2 data-aos="fade-up">We can help you!</h2>
              <p data-aos="fade-up" data-aos-delay="100">A healthy meal plan provides your body with the nutrients it needs every day, while maintaining your daily calorie goal for weight loss. A healthy meal plan will also lower your risk for heart disease and other health conditions.</br>A healthy meal plan:Emphasizes vegetables, fruits, whole grains, and fat-free or low-fat dairy products Includes lean meats, poultry, fish, beans, eggs, and nuts.</p>
            </div>
          </div>
        <div class="row align-items-center">
          <div class="col-lg-4">
            <img src="{{asset('frontend_assets/img/dishes_1.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200">
          </div>
          <div class="col-lg-4">
            <img src="{{asset('frontend_assets/img/about_1.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="300">
            <img src="{{asset('frontend_assets/img/about_2.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="400">
          </div>
          <div class="col-lg-4">
            <img src="{{asset('frontend_assets/img/dishes_3.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
          </div>
        </div>

        <div class="row">
          <div class="my-5 bmi">

                        <div class="justify-content-center">
                          <div class="col-md-12" style="padding-left: 200px;">
                            <form>
                                <div class="form-row">
                                      <div class="col-md-10">
                                        <p><label>Gender:</label>
                                       <input type="radio" name="gender" value="male" id="e_male">
                                       <label>Male</label>
                                       <input type="radio" name="gender" value="female" id="e_female"> 
                                       <label>Female</label></p>
                                       </div>
                               </div>
                                <div class="form-row">
                                  <div class="col-md-8" style="margin-top: 10px;">
                                      <div class="form-group">
                                        <label class="small mb-1" for="inputName"> Height</label>
                                        <input class="form-control py-4" id="feet" type="text" placeholder="feet" name="name" />
                                      </div>
                                  </div>
                                   <div class="col-md-2">
                                        <div class="form-group">
                                        <input class="form-control py-4" style="margin-top: 35px;" id="inches" type="text" placeholder="inches" name="name" />
                                      </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                      <div class="col-md-10">
                                            <div class="form-group">
                                              <label class="small mb-1" for="phone">Weight</label>
                                              <input class="form-control py-4" id="weight" type="text" placeholder="pounds" name="phone" />
                                            </div>
                                      </div>
                                </div>
                                    
                                <div class="form-row">
                                    <div class="col-md-10">
                                              <div class="form-group">
                                                <label class="small mb-1" for="phone">Age</label>
                                                <input class="form-control py-4" id="age" type="text" placeholder="Enter your age" name="ages" />
                                              </div>
                                      </div>
                                </div>

                                <div class="form-row" >
                                      <div class="col-md-10" style="margin-top: 10px;">
                                          <label class="small mt-3" for="phone">How much exercise do you play?</label>
                                          <select class="form-control select2 form-control-lg" name="menu" id="exercise">
                                              <option>Sedentary (little or no exercise)</option>
                                              <option>Lightly active (light exercise/sports 1-3 days/week)</option>
                                              <option>Moderately active (moderate exercise/sports 3-5 days/week)</option>
                                              <option>Very active (hard exercise/sports 6-7 days a week)</option>
                                              <option>Extremely active (very hard exercise/sports & physical job or 2x training)</option>
                                          </select>



                                      </div>
                                </div>
                                <div class="form-row">
                                      <div class="col-md-10" style="margin-top: 10px;">
                                          <label class="small mb-1" for="phone">Weight Target</label>
                                          <select class="form-control select2 form-control-lg" name="menu" id="w_target">
                                              <option>Weight-gain</option>
                                              <option>Weight-loss</option>
                                              <option>Current-weight</option>
                                          </select>
                                      </div>
                                </div>

                                <div class=" col-md-10 form-group d-flex align-items-center justify-content-between mt-4 mb-0 "  style="margin-top: 20px;">
                                  
                                  <button  type="button" class="btn_register btn btn-secondary mainfullbtncolor btn-block"> Calculate</button>

                                </div>
                              </form>
                          </div>
                        </div>
          </div> 
        </div>
      </div>
    </section>

    <section class="section ">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Special Menu</h2>
            </div>
          </div>
        </div>
        <div class="owl-carousel centernonloop">
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="100">
            <div class="text">
              <p class="dishes-price">$11.50</p>
              <h2 class="dishes-heading">Organic tomato salad, gorgonzola cheese, capers</h2>
            </div>
            <img src="{{asset('frontend_assets/img/dishes_1.jpg')}}" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="200">
            <div class="text">
              <p class="dishes-price">$12.00</p>
              <h2 class="dishes-heading">Baked broccoli</h2>
            </div>
            <img src="{{asset('frontend_assets/img/dishes_2.jpg')}}" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="300">
            <div class="text">
              <p class="dishes-price">$11.00</p>
              <h2 class="dishes-heading">Spicy meatballs</h2>
            </div>
            <img src="{{asset('frontend_assets/img/dishes_3.jpg')}}" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="400">
            <div class="text">
              <p class="dishes-price">$12.00</p>
              <h2 class="dishes-heading">Eggplant parmigiana</h2>
            </div>
            <img src="{{asset('frontend_assets/img/dishes_4.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

<<<<<<< HEAD
    </section> <!-- .section -->

    <section class="section bg-light  top-slant-white bottom-slant-gray">
=======
                    <div class="my-5 showdetail">

                        <div class="justify-content-center">
                             <div class="col-md-12" style="padding-left: 300px;">
                                <form method="" action="">
                                      <div class="row">
                                          <div class="col-md-4 breakfast">
                                            {{-- <div class="tile">
                                              <div class="card my-3">
                                                <div class="row no-gutters">
                                                  <div class="col-md-8">
                                                    <div class="card-body">
                                                      <h5 class="card-title" id="codenob"></h5>
                                                      <p class="card-text" id="foodpackagesb"></p>
                                                      <p class="card-text" id="priceb"></p>
                                                      <p class="card-text" id="breakfast"></p>
                                                      <p class="card-text" id="typeb"></p>
                                                      <p class="card-text" id="idb"></p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> --}}
                                          </div>

                                          <div class="col-md-4 lunch">
                                             <div class="tile">
                                               

                                                <div class="card my-3">
                                                  <div class="row no-gutters">
                                                    <div class="col-md-8">
                                                      <div class="card-body">
                                                        <h5 class="card-title" id="codenol"></h5>
                                                        <p class="card-text" id="foodpackagesl"></p>
                                                        <p class="card-text" id="pricel"></p>
                                                        <p class="card-text" id="lunch"></p>
                                                        <p class="card-text" id="typel"></p>
                                                        <p class="card-text" id="idl"></p>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>

                                          <div class="col-md-4 dinner">
                                            <div class="tile">

                                              <div class="card my-3">
                                                <div class="row no-gutters">
                                                  <div class="col-md-8">
                                                    <div class="card-body">
                                                      <h5 class="card-title" id="codenod"></h5>
                                                      <p class="card-text" id="foodpackagesd"></p>
                                                      <p class="card-text" id="priced"></p>
                                                      <p class="card-text" id="dinner"></p>
                                                      <p class="card-text" id="typed"></p>
                                                      <p class="card-text" id="idd"></p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
>>>>>>> 5c70982e11bda11a3dea064b4a7279a528d9a3eb

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Our Menu</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('frontend_assets/img/dishes_4.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Grilled Caesar salad, shaved reggiano</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$12.00</p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('frontend_assets/img/dishes_1.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Spicy Calamari and beans</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$12.00</p>
                
              </div>
              
            </div>

<<<<<<< HEAD
          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('frontend_assets/img/dishes_2.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Bacon wrapped wild gulf prawns</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$18.00</p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('frontend_assets/img/dishes_3.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Seared ahi tuna fillet*, honey-ginger sauce</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$16.00</p>
                
              </div>
              
            </div>

          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('frontend_assets/img/dishes_4.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Grilled Caesar salad, shaved reggiano</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$12.00</p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('frontend_assets/img/dishes_1.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Spicy Calamari and beans</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$12.00</p>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('frontend_assets/img/dishes_2.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Bacon wrapped wild gulf prawns</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$18.00</p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('frontend_assets/img/dishes_3.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Seared ahi tuna fillet*, honey-ginger sauce</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto illo delectus...</p>
                <p class="text-primary h3">$16.00</p>
                
              </div>
              
            </div>

          </div>
        </div>
        

      </div>
    </section> <!-- .section -->

   

    <section class="section relative-higher">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Testimonial</h2>
              <!-- <span class="back-text">Testimonial</span> -->
            </div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="owl-carousel centernonloop2">
              <div class="slide" data-aos="fade-left" data-aos-delay="100">
                <blockquote class="testimonial">
                  <p>&ldquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &rdquo;</p>
                  <div class="d-flex author">
                    <img src="{{asset('frontend_assets/img/person_1.jpg')}}" alt="" class="mr-4">
                    <div class="author-info">
                      <h4>Mellisa Howard</h4>
                      <p>CEO, XYZ Company</p>
=======

                  
            </div>  

            {{-- <div class="row showdetail">
                <div class="breakfast">
                      <div class="card border-success mb-3" style="max-width: 18rem;">
                      <div class="card-header"></div>
                      <div class="card-body text-success">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                      </div>
                    </div>

                </div>
            </div> --}}
        </div><!-- .container close -->
 </section>

 <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <img class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" src="{{asset('frontend_assets/images/cooker-img.png')}}" alt="cooker-img">
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" >Your <span>Restaurant’s</span> </br> Website Has To Look <span>Good</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </br>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
 </section>

 <section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="heading">Latest <span>From</span> the <span>Blog</span></h1>
                    <ul>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                            <div class="blog-img">
                                <img src="{{('frontend_assets/images/blog/blog-img-1.jpg')}}" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>Homestyle Chicken Pot Pie</h3>
                                <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                            <div class="blog-img">
                                <img src="{{('frontend_assets/images/blog/blog-img-2.jpg')}}" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>Homestyle Chicken Pot Pie</h3>
                                <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                            <div class="content-left">
                                <h3>Homestyle Chicken Pot Pie</h3>
                                <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                            </div>
                            <div class="blog-img-2">
                                <img src="{{('frontend_assets/images/blog/blog-img-3.jpg')}}" alt="blog-img">
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
                            <div class="content-left">
                                <h3>Homestyle Chicken Pot Pie</h3>
                                <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                            </div>
                            <div class="blog-img-2">
                                <img src="{{('frontend_assets/images/blog/blog-img-4.jpg')}}" alt="blog-img">
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
                            <div class="blog-img">
                                <img src="{{('frontend_assets/images/blog/blog-img-5.jpg')}}" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>Homestyle Chicken Pot Pie</h3>
                                <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                            <div class="blog-img">
                                <img src="{{('frontend_assets/images/blog/blog-img-6.jpg')}}" alt="blog-img">
                            </div>
                            <div class="content-right">
                                <h3>Homestyle Chicken Pot Pie</h3>
                                <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                            </div>
                        </li>
                    </ul>
                    <a class="btn btn-default btn-more-info wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="#" role="button">More Info</a>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .containe close -->
 </section>

 <section id="price" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> the <span>PRICE</span></h1>
                    <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                    <div class="pricing-list">
                        <div class="title">
                            <h3>Featured <span>on the week</span></h3>
                        </div>
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Pancakes n' Such</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 25.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Homestyle Chicken Pot Pie</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 10.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Cereal, Panecillos y Frutas </h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 5.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Meat of Skewers</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 15.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                           </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Steak with a Garlic and Parsley Risotto</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 75.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                <div class="item">
                                    <div class="item-title">
                                        <h2>Caesar Salad</h2>
                                        <div class="border-bottom"></div>
                                        <span>$ 7.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim&&</p>
                                </div>
                            </li>
                        </ul>
                        <a class="btn btn-default pull-right wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="#" role="button">More Info</a>
>>>>>>> 5c70982e11bda11a3dea064b4a7279a528d9a3eb
                    </div>
                  </div>  
                </blockquote>
              </div>
              <div class="slide" data-aos="fade-left" data-aos-delay="200">
                <blockquote class="testimonial">
                  <p>&ldquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &rdquo;</p>
                  <div class="d-flex author">
                    <img src="{{asset('frontend_assets/img/person_2.jpg')}}" alt="" class="mr-4">
                    <div class="author-info">
                      <h4>Mike Richardson</h4>
                      <p>CEO, XYZ Company</p>
                    </div>
                  </div>  
                </blockquote>
              </div>
              <div class="slide" data-aos="fade-left" data-aos-delay="300">
                <blockquote class="testimonial">
                  <p>&ldquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &rdquo;</p>
                  <div class="d-flex author">
                    <img src="{{asset('frontend_assets/img/person_3.jpg')}}" alt="" class="mr-4">
                    <div class="author-info">
                      <h4>Charles White</h4>
                      <p>CEO, XYZ Company</p>
                    </div>
                  </div>  
                </blockquote>
              </div>
            </div>
          </div>
        </div>

        

        
      </div>
    </section> <!-- .section -->

    <section class="section  bg-light top-slant-white">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Blog</h2>
              <span class="back-text">Our Blog</span>
            </div>
          </div>
        </div>
      </div>

<<<<<<< HEAD
      <div class="container">
=======
 <section id="contact-us" style="background-color: #fff;">
    <div class="container">
>>>>>>> 5c70982e11bda11a3dea064b4a7279a528d9a3eb
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('frontend_assets/img/dishes_1.jpg');"></a>
              <div class="text">
                <h3><a href="single.html">How To Cook Pasta?</a></h3>
                <p class="sched-time">
                  <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                </p>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                
              </div>
              
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="blog d-block">
              <a class="bg-image d-block" href="single.html" style="background-image: url('frontend_assets/img/dishes_2.jpg');"></a>
              <div class="text">
                <h3><a href="single.html">How To Cook Pasta?</a></h3>
                <p class="sched-time">
                  <span><span class="fa fa-calendar"></span> April 22, 2018</span> <br>
                </p>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                
                <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>

    </section> <!-- .section -->

@endsection

@section('script')

  <script type="text/javascript">

        $(document).ready(function(){
           $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

           $('.showdetail').hide();
           $(".order").hide();
           $(".addtocart").click(function(){
               $(".bmi").hide();
               $(".showdetail").hide();
               $(".order").show();
           })
           $(".btn_register").click(function(){
               var feet= $("#feet").val();
               var inches= $("#inches").val();
               var weight = $("#weight").val();
               var age = $("#age").val();
               var gender = $("input[name='gender']:checked").val();
               var exercise = $("#exercise").val();
               var w_target = $("#w_target").val();
               

               var height = (12*feet)+(1*inches);
               // alert(height);

               var bmr=0;
               var cal = 0;

                   if(gender=="male")
                   {
                    bmr = 66 + (13.7 * (weight/2.2)) + (5 * (height*2.54)) - (6.8*age);
                   }

                   else if(gender=="female")
                   {
                    bmr = 655 + (9.6 * (weight/2.2)) + (1.8 * (height*2.54)) - (4.7*age);
                   }


<<<<<<< HEAD
                  if(exercise=="Sedentary (little or no exercise)")
                  {
                    cal = bmr*1.2;
                  }
                  
                  else if(exercise=="Lightly active (light exercise/sports 1-3 days/week)")
                  {
                    cal = bmr*1.375;
                  }

                  else if(exercise=="Moderately active (moderate exercise/sports 3-5 days/week)")
                  {
                    cal = bmr*1.55;
                  }

                  else if(exercise=="Very active (hard exercise/sports 6-7 days a week)")
                  {
                    cal = bmr*1.725;
                  }

                  else if(exercise=="Extremely active (very hard exercise/sports & physical job or 2x training)")
                  {
                    cal = bmr*1.9;
                  }

                  var calories = Math.trunc(cal);

                  if (w_target=="Weight-loss")
                  {
                    calories=calories-500;
                  }
                  else if(w_target=="Weight-gain")
                  {
                    calories=calories+500;
                  }

                  var breakfast = 0;
                  var lunch = 0;
                  var dinner = 0;

                 $.post("{{route('getfoodpackage')}}",{w_target:w_target},function (response) {
=======
              var calories = Math.trunc(cal);

              if (w_target=="Weight-loss")
              {
                calories=calories-500;
              }
              else if(w_target=="Weight-gain")
              {
                calories=calories+500;
              }
              else if(w_target=="Current-weight")
              {
                calories=calories;
              }


           


              var breakfast = 0;
              var lunch = 0;
              var dinner = 0;

              $.post("{{route('getfoodpackage')}}",{w_target:w_target},function (response) {
>>>>>>> 5c70982e11bda11a3dea064b4a7279a528d9a3eb
                    console.log(Number(response.Breakfast.totalCalories));

                    var idb = Number(response.Breakfast.id);
                    var idl = Number(response.Lunch.id);
                    var idd = Number(response.Dinner.id);

                    var w_targetb = response.Breakfast.w_target;
                    var w_targetl = response.Lunch.w_target;
                    var w_targetd = response.Dinner.w_target;

                    var codenob = response.Breakfast.codeno;
                    var codenol = response.Lunch.codeno;
                    var codenod = response.Dinner.codeno;
                    var foodpackagesb = response.Breakfast.foodpackages;
                    var foodpackagesl = response.Lunch.foodpackages;
                    var foodpackagesd = response.Dinner.foodpackages;
                    var priceb = Number(response.Breakfast.price);
                    var pricel = Number(response.Lunch.price);
                    var priced = Number(response.Dinner.price);
                    var typeb = response.Breakfast.type;
                    var typel = response.Lunch.type;
                    var typed = response.Dinner.type;
          
                    breakfast += Number(response.Breakfast.totalCalories);
                    lunch += Number(response.Lunch.totalCalories);
                    dinner += Number(response.Dinner.totalCalories);

                    var CalForonegram = calories/3;
                    var BtotalgramToEat = Math.trunc(CalForonegram/breakfast);
                    var LtotalgramToEat = Math.trunc(CalForonegram/lunch);
                    var DtotalgramToEat = Math.trunc(CalForonegram/dinner);


                    alert("You need to eat" + " " + (BtotalgramToEat + "g " + "for breakfast and ") +" "+(LtotalgramToEat + "g " + "for lunch and")+" "+(DtotalgramToEat + "g " + "for dinner "));
                    // alert("Lunch " + LtotalgramToEat + "g");
                    // alert("Dinner " + DtotalgramToEat + "g");
                    $(".bmi").hide();
                    $(".showdetail").show();

                   $('#codenob').html(codenob);
                   $('#foodpackagesb').html(foodpackagesb);
                   $('#priceb').html(priceb);
                   $('#breakfast').html(breakfast);
                   $('#typeb').html(typeb);
                   $('#idb').html(idb);


                   $('#codenol').html(codenol);
                   $('#foodpackagesl').html(foodpackagesl);
                   $('#pricel').html(pricel);
                   $('#lunch').html(lunch);
                   $('#typel').html(typel);
                   $('#idl').html(idl);
                

                   $('#codenod').html(codenod);
                   $('#foodpackagesd').html(foodpackagesd);
                   $('#priced').html(priced);
                   $('#dinner').html(dinner);
                   $('#typed').html(typed);
                   $('#idd').html(idd);

                
<<<<<<< HEAD

                   })
=======
                 var html = "";
                 html +=`<div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">${typeb}</div>
                             <div class="card-body text-success">
                                <h5 class="card-title">Codeno : ${codenob}</h5>
                                     <p class="card-text">Foodpackage : ${foodpackagesb}</p>
                                     <p class="card-text">TotalCalories : ${breakfast}</p>
                                     <p class="card-text">Price : ${priceb}</p>
                             </div>
                     </div>`;
                

                     // console.log(html);
                     $('.breakfast').html(html);
              })
                 
                
                
            
                
               
>>>>>>> 5c70982e11bda11a3dea064b4a7279a528d9a3eb
            

            })
       
        })
    
  
    
    </script>
@endsection