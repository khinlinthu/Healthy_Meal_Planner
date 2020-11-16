@extends('frontendtemplate')

@section('content')

    <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Calculate your calories here!</h1>
      </div>
    </div>
  
    <div class="container my-5 bmi">

        <div class="row justify-content-center">
          <div class="col-md-12" style="padding-left: 300px;">
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

    <div class="container my-5 showdetail">

        <div class="row justify-content-center">
          <div class="col-md-12" style="padding-left: 300px;">
            <form>
               <div class="row">
                  <div class="col-md-4 breakfast">
                    <div class="tile">
                      <div class="card my-3">
                        <div class="row no-gutters">
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title" id="codenob"></h5>
                              <p class="card-text" id="foodpackagesb"></p>
                              <p class="card-text" id="priceb"></p>
                              <p class="card-text" id="breakfast"></p>
                              <p class="card-text" id="typeb"></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                 <button class="btn btn-warning mt-1 addtocart">
                  <a href="{{route('cartpage')}}">Order</a></button>
               </div>
            </form>
          </div>
        </div>
    </div>


  <div class="order">
          
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Order Received </h1>
      </div>
  </div>

  <!-- Content -->
  <div class="container my-5" style="margin-left: 500px;">

    <div class="row justify-content-center">
      <div class="col-10 shadow p-3 mb-5 bg-white rounded">
        <div class="row">
          <div class="col-4">
            <img src="{{asset('frontend_asset/images/success-tick-dribbble.gif')}}" class="img-fluid" style="width: 120px;height: 100px; ">
          </div>
          <div class="col-8 pt-5">
            <h1> Your order is complete </h1>
            <p> You order will be delivered in 4 days. </p>
          </div>
        </div>
        
      </div>

    </div>
  </div>
    </div>

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


              var breakfast = 0;
              var lunch = 0;
              var dinner = 0;

              $.post("{{route('getfoodpackage')}}",{w_target:w_target},function (response) {
                    console.log(Number(response.Breakfast.totalCalories));

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
                   $('#typeb').html(typeb)

                   $('#codenol').html(codenol);
                   $('#foodpackagesl').html(foodpackagesl);
                   $('#pricel').html(pricel);
                   $('#lunch').html(lunch);
                   $('#typel').html(typel)
                

                   $('#codenod').html(codenod);
                   $('#foodpackagesd').html(foodpackagesd);
                   $('#priced').html(priced);
                   $('#dinner').html(dinner);
                   $('#typed').html(typed)
                
                

              })

              
                // console.log(breakfast);
               
            

           })
       
        })
    
  
    
    </script>
 @endsection