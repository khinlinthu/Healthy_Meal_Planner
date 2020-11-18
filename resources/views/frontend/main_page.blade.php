    
@extends('frontendtemplate')

@section('content')

    <div class="slider-wrap">
      <section class="home-slider owl-carousel">


        <div class="slider-item" style="background-image: url('frontend_assets/img/hero_1.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Enjoy Your Day At Here!</h1>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Welcome</a></p>
              </div>
            </div>
          </div>

        </div>

        <div class="slider-item" style="background-image: url('frontend_assets/img/hero_2.jpg');">
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
    

    <section class="section bg-light py-5  bottom-slant-gray" style="font-family: flowers;">
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
    

    <section class="section pb-0" style="background-color: #fff; font-family: Flower" >
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
              </div>    <!-- Subcategory Title -->
        </div>

      </div>
    </section>

    <section class="section " style="background-color: #fff;font-family: Flower">

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

    </section> <!-- .section -->

    <section class="section bg-light  top-slant-white bottom-slant-gray" style="font-family: Flower;">

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

   

    <section class="section relative-higher" style="background-color: #fff;font-family: Flower">

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

    <section class="section  bg-light top-slant-white" style="font-family: Flower;">
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

      <div class="container">
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