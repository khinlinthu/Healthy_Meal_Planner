    
@extends('frontendtemplate')

@section('content')

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
    

    <section class="section bg-light py-5  bottom-slant-gray" style="font-family: flowers;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-dinner d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary banner">Enjoy Eating</h3>
            <p class="banner">Eating lots of vegetables and fruit. This is one of the most important diet habits.Eating a healthy diet is not about strict limitations, staying unrealistically thin, or depriving yourself of the foods you love.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary banner">Fresh Sea Foods</h3>
            <p class="banner">All types of fish are good sources of protein and B vitamins.When you need something other than seafood, check out these heart healthy recipes ..</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary banner">Cup of Coffees</h3>
            <p class="banner">A cup of coffee may be just what you need to get going in the morning.A "cup" of coffee in the US is usually 4 fluid ounces (118 ml), brewed using 5 fluid ounces (148 ml) of water. </p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary banner">Meat Eaters</h3>
            <p class="banner">Meats such as chicken, pork, lamb and beef are all rich in protein. A balanced diet can include protein from meat and is also one of the main sources of vitamin B12.</p>
          </div>
        </div>
      </div>
    </section>
    

    <section class="section pb-0" style="background-color: #fff; font-family: Flower" >
      <div class="container">

        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
              <h2 data-aos="fade-up" class="meal">We can help you!</h2>
              <p data-aos="fade-up" data-aos-delay="100" class="plan">A healthy meal plan provides your body with the nutrients it needs every day, while maintaining your daily calorie goal for weight loss. A healthy meal plan will also lower your risk for heart disease and other health conditions.</br>A healthy meal plan:Emphasizes vegetables, fruits, whole grains, and fat-free or low-fat dairy products Includes lean meats, poultry, fish, beans, eggs, and nuts.</p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-4">
              <img src="{{asset('frontend_assets/img/noodle.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200" >
            </div>
            <div class="col-lg-4">
              <img src="{{asset('frontend_assets/img/healthy.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="300">
              <img src="{{asset('frontend_assets/img/juice.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="400">
            </div>
            <div class="col-lg-4">
              <img src="{{asset('frontend_assets/img/Greek-Salad.jpg')}}" alt="Free website template by Free-Template.co" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
            </div>
        </div>

        <div class="row " style="margin-top: 50px;">
          <div class="col-md-2 gif">
            <img src="{{asset('frontend_assets/img/boy.gif')}}" height="650px;" style="margin-left: -40px;">
          </div>
          <div class="col-md-10" style="padding-left: 360px;">
              <div class="my-5 bmi" >
                  <div>
                        <div class="form-row">
                                <p><label>Gender:</label>
                               <input type="radio" name="gender" value="male" id="e_male">
                               <label>Male</label>
                               <input type="radio" name="gender" value="female" id="e_female"> 
                               <label>Female</label></p>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6" >
                              <div class="form-group">
                                <label class="small mb-1" for="inputName"> Height</label>
                                <input class="form-control py-4" id="feet" type="text" placeholder="feet" name="name" />
                              </div>
                          </div>
                           <div class="col-md-2">
                                <div class="form-group">
                                <input class="form-control py-4" style="margin-top: 24px;" id="inches" type="text" placeholder="inches" name="name" />
                              </div>
                            </div>
                        </div>

                        <div class="form-row">
                              <div class="col-md-8" >
                                    <div class="form-group">
                                      <label class="small mb-1" for="phone">Weight</label>
                                      <input class="form-control py-4" id="weight" type="text" placeholder="pounds" name="phone" />
                                    </div>
                              </div>
                        </div>
                            
                        <div class="form-row">
                            <div class="col-md-8">
                                      <div class="form-group">
                                        <label class="small mb-1" for="phone">Age</label>
                                        <input class="form-control py-4" id="age" type="text" placeholder="Enter your age" name="ages" />
                                      </div>
                              </div>
                        </div>

                        <div class="form-row" >
                              <div class="col-md-8" style="margin-top: 10px;">
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
                              <div class="col-md-8" style="margin-top: 10px;">
                                  <label class="small mb-1" for="phone">Weight Target</label>
                                  <select class="form-control select2 form-control-lg" name="menu" id="w_target">
                                      <option>Weight-gain</option>
                                      <option>Weight-loss</option>
                                      <option>Current-weight</option>
                                  </select>
                              </div>
                        </div>

                        <div class="form-row">
                          <div class=" col-md-8"style="margin-top: 20px;">
                          
                          <button  type="button" class="btn_register btn btn-secondary mainfullbtncolor btn-block results"> Calculate</button>

                        </div>
                        </div>
                    
                  </div>
                 
              </div>    <!-- Subcategory Title -->
           </div>
        </div>
          
         <h2 id="food" style="font-family: istokss; margin-bottom: 20px; text-align: center;;">Foodpackages</h2>
         <h5 id="title" style="text-align: center;margin-bottom: 50px;"> Your delivery is already here!</h5>
      
        <!-- <div class="row result">
           <label id="results"></label>
           <label id="results"></label>
           <label id="results"></label>

        </div> -->
        <!-- {{-- BMI result --}} -->
        <div class="row showdetail">

                 <div class="col-md-4 breakfast" style="text-align: center;"></div>
                  <div class=" col-md-4 lunch" style="text-align: center;"></div>
                  <div class=" col-md-4 dinner" style="text-align: center;"></div>
       

          <button class="btn btn-warning mt-1 addtocart" style="margin-left: 1000px;">
             <a href="{{route('cartpage')}}">Order</a>
          </button>
        </div><!-- {{-- BMI result --}} -->


  

        

      </div>
    </section>

    <section class="section " style="background-color: #fff;font-family: Flower">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Next Special Menu</h2>
            </div>
          </div>
        </div>
        <div class="owl-carousel centernonloop">
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="100">
            <div class="text">
              <p class="dishes-price">$11.50</p>
              <h2 class="dishes-heading fruit">Organic tomato salad, gorgonzola cheese, capers</h2>
            </div>
            <img src="{{asset('frontend_assets/img/dishes_1.jpg')}}" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="200">
            <div class="text">
              <p class="dishes-price">$12.00</p>
              <h2 class="dishes-heading fruit">Baked broccoli</h2>
            </div>
            <img src="{{asset('frontend_assets/img/dishes_2.jpg')}}" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="300">
            <div class="text">
              <p class="dishes-price">$11.00</p>
              <h2 class="dishes-heading fruit">Spicy meatballs</h2>
            </div>
            <img src="{{asset('frontend_assets/img/dishes_3.jpg')}}" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="400">
            <div class="text">
              <p class="dishes-price">$12.00</p>
              <h2 class="dishes-heading fruit">Eggplant parmigiana</h2>
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
              <div class="bg-image order-2" style="background-image: url('frontend_assets/img/pie1.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Homestyle Chicken Pot Pie</h3>
                <p  class="fruit">Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                <p class="text-primary h3">$12.00</p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('frontend_assets/img/summer.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Summer Fruits breakfast</h3>
                <p  class="fruit">The weathers getting warmer and the shops are full of plump berries and fruit. </p>
                <p class="text-primary h3">$12.00</p>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('frontend_assets/img/chicken.jpg'); " data-aos="fade" ></div>
              <div class="text order-1">
                <h3>Chicken Salad on  Bread</h3>
                <p  class="fruit">Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                <p class="text-primary h3">$18.00</p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('frontend_assets/img/pie.jpeg');height: 250px;" data-aos="fade"></div>
              <div class="text">
                <h3>Roasted Chicken Pot Pie</h3>
                <p  class="fruit"> Consisting of roasted meat, roast potatoes or mashed potatoes and stuffing, gravy and mint sauce.</p>
                <p class="text-primary h3">$16.00</p>
                
              </div>
              
            </div>

          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('frontend_assets/img/potato.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Baked potato with chicken</h3>
                <p  class="fruit">It may be served with fillings and condiments such as butter, cheese, sour cream, gravy, baked beans and meat./p>
                <p class="text-primary h3">$12.00</p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('frontend_assets/img/green.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Chiecken Salad</h3>
                <p  class="fruit">Chicken salad is any salad with chicken as a main ingredient. Other common ingredients may include mayonnaise, hard-boiled egg etc</p>
                <p class="text-primary h3">$12.00</p>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('frontend_assets/img/yogurtss.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Yogurt fruit</h3>
                <p  class="fruit">Yogurt is a popular dairy product that’s made by the bacterial fermentation of milk.</p>
                <p class="text-primary h3">$18.00</p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('frontend_assets/img/detox.jpg'); height:300px;" data-aos="fade"></div>
              <div class="text">
                <h3>Detox water</h3>
                <p  class="fruit">Detox water is water that has been infused with the flavors of fresh fruits, vegetables or herbs. It’s sometimes referred to as fruit-infused water or fruit-flavored water.

                </p>
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
              <h2>Foods To  Avoid</h2>
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
                <ul class="fruit">
                   <li>Fast food: Chicken nuggets, fries, pizza, hot dogs etc.</li>
                   <li>Refined carbs: White bread, sugary cereals, white pasta, bagels, crackers, corn chips, tortillas, etc.</li>
                </ul> 
                </blockquote>
              </div>
              <div class="slide" data-aos="fade-left" data-aos-delay="200">
                <blockquote class="testimonial">
                  <ul class="fruit">
                     <li>Added sugars: Sugary snack bars, candy, baked goods, candy, table sugar, agave, etc.</li>
                     <li>Processed foods: Packaged foods, processed meats (deli meats, bacon), boxed pasta dishes, cereal bars, etc.</li>
                  </ul>
                </blockquote>
              </div>
              <div class="slide" data-aos="fade-left" data-aos-delay="300">
                <blockquote class="testimonial">
                 <ul class="fruit">
                  <li>Fried foods: Potato chips, deep-fried foods, doughnuts, mozzarella sticks, etc.</li>
                   <li> Diet and low-fat foods: Diet bars, low-fat ice cream, low-fat chips, diet frozen meals, low-calorie candies, etc.</li>
                   <li>Sweetened beverages: Soda, fruit juice, energy drinks, flavored milks, sweetened coffee drinks, etc.</li>
                 </ul>
                </blockquote>
              </div>
            </div>
          </div>
        </div>

        

        
      </div>
    </section> <!-- .section -->

   

    
    <section class="section  contact pt-5 top-slant-white2 relative-higher bottom-slant-gray" style="background-color: #fff">
      
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>
          
          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Contact Details</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>Pathein Street, Sanchung Yangon</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+95 9457382002</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>info@healthymealplanner.com</span>
                </p>
              </div>

          </div>
        </div>
      </div>

    </section>

    @endsection