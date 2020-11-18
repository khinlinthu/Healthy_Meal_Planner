 
@extends('frontendtemplate')

@section('content')

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

            </div><!-- .row close -->

            <div class="row ">
                    <div class="jumbotron jumbotron-fluid subtitle">
                         <div class="container">
                            <h3 class="text-center text-white">Calculate Your Calorie Needs for your Health!</h3>
                         </div>
                     </div>
  
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
                    </div>    <!-- Subcategory Title -->


                    <div class="my-5 showdetail">

                        <div class="justify-content-center">
                             <div class="col-md-12" style="padding-left: 300px;">
                                <form method="" action="">
                                      <div class="row">
                                          <div class="col-md-4 breakfast">
                                            
                                          </div>

                                          <div class="col-md-4 lunch">
                                             
                                          </div>

                                          <div class="col-md-4 dinner">
                                           
                                          </div>

                                         <button class="btn btn-warning mt-1 addtocart">
                                          <a href="{{route('cartpage')}}">Order</a></button>
                                      </div>
                                </form>
                              </div>
                         </div>
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
                    </div>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .containe close -->
 </section>

 <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> SUBSCRIBE <span>to our</span> NEWSLETTER</h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Enter your email to subscribe...">
                                    <div class="input-group-addon">
                                        <button class="btn btn-default" type="submit">subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
 </section>

 <section id="contact-us" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">our <span>CONTACT US</span></h1>
                    <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Sign Up for <span>Email Alerts</span> </h3>
                    <form>
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Write your full name here...">
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                            <input type="text" class="form-control" placeholder="Write your email address here...">
                        </div>
                        <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                            <textarea class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                        </div>
                    </form>
                    <a class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" href="#" role="button">send your message</a>
                </div>
            </div><!-- .col-md-12 close -->
        </div><!-- .row close -->
    </div><!-- .container close -->
 </section>


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
              else if(w_target=="Current-weight")
              {
                calories=calories;
              }


           


              var breakfast = 0;
              var lunch = 0;
              var dinner = 0;

              $.post("{{route('getfoodpackage')}}",{w_target:w_target},function (response) {
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


                
                 // var html = "";
                 // html +=`<div class="card border-success mb-3" style="max-width: 18rem;">
                 //        <div class="card-header" id="typeb">${typeb}</div>
                 //             <div class="card-body text-success">
                 //                <h5 class="card-title" id="codeb">${codenob}</h5>
                 //                     <p class="card-text" id="foodpackagesb">${foodpackagesb}</p>
                 //                     <p class="card-text" id="breakfast">${breakfast}</p>
                 //                     <p class="card-text" id="priceb"> ${priceb}</p>
                 //                     <p class="card-text" id="idb">${idb}</p>
                 //             </div>
                 //     </div>`;
                
                 //     // console.log(html);
                 //     $('.breakfast').html(html);

                 //     var html1="";
                 //     html1 +=`<div class="card border-success mb-3" style="max-width: 18rem;">
                 //        <div class="card-header" id="typel">${typel}</div>
                 //             <div class="card-body text-success">
                 //                <h5 class="card-title" id="codel">${codenol}</h5>
                 //                     <p class="card-text" id="foodpackagesl">${foodpackagesl}</p>
                 //                     <p class="card-text" id="lunch">${lunch}</p>
                 //                     <p class="card-text" id="pricel"> ${pricel}</p>
                 //                     <p class="card-text" id="idl">${idl}</p>
                 //             </div>
                 //     </div>`;
                 //     $('.lunch').html(html1);

                 //     var html2="";
                 //     html2 +=`<div class="card border-success mb-3" style="max-width: 18rem;">
                 //        <div class="card-header" id="typed">${typed}</div>
                 //             <div class="card-body text-success">
                 //                <h5 class="card-title" id="coded">${codenod}</h5>
                 //                     <p class="card-text" id="foodpackagesd">${foodpackagesd}</p>
                 //                     <p class="card-text" id="dinner">${dinner}</p>
                 //                     <p class="card-text" id="priced"> ${priced}</p>
                 //                     <p class="card-text" id="idd">${idd}</p>
                 //             </div>
                 //     </div>`;
                 //     $('.dinner').html(html2);
              })
                 
          

           })
       
        })
    
  
    
    </script>
 @endsection