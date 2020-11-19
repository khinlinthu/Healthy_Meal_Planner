

        $(document).ready(function(){
           $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

           $('.showdetail').hide();
           $(".order").hide();
           $("#title").hide();
           $("#food").hide();
           // $(".results").hide();
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

              $.post("getfoodpackage",{w_target:w_target},function (response) {
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


                    // var results = document.getElementById('results');
                    // results.innerHTML = "Breakfast for"+ " " + BtotalgramToEat + "g" + "Lunch for"+ " " + LtotalgramToEat + "g" +  "Dinner for" + " " + DtotalgramToEat + "g";
                                        

                    alert("You need to eat" + " " + (BtotalgramToEat + "g " + "for breakfast and ") +" "+(LtotalgramToEat + "g " + "for lunch and")+" "+(DtotalgramToEat + "g " + "for dinner "));

                    $(".bmi").hide();
                    $(".showdetail").show();
                    $(".gif").hide();
                    $("#title").show();
                    $("#food").show();
                
                 var html = "";
                 html +=`<div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="typeb">${typeb}</div>
                             <div class="card-body text-dark">
                                <h5 class="card-title" id="codeb" style ="text-align:center;"><em">Codeno : </em>${codenob}</h5>
                                     <p class="card-text" id="foodpackagesb" style ="text-align:center;"><em">Food : </em>${foodpackagesb}</p>
                                     <p class="card-text" id="breakfast" style ="text-align:center;"><em">Calories : </em>${breakfast}<em">cal</em></p>
                                     <p class="card-text" id="priceb" style ="text-align:center;"> ${priceb} <em">MMK</em></p>
                                     <p class="card-text" id="idb" style ="text-align:center;"><em">IdNo : </em>${idb}</p>
                             </div>
                     </div>`;
                
                     // console.log(html);
                     $('.breakfast').html(html);

                     var html1="";
                     html1 +=`<div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="typel">${typel}</div>
                             <div class="card-body text-dark">
                                <h5 class="card-title" id="codel" style ="text-align:center;"><em">Codeno : </em>${codenol}</h5>
                                     <p class="card-text" id="foodpackagesl" style ="text-align:center;"><em">Food : </em>${foodpackagesl}</p>
                                     <p class="card-text" id="lunch" style ="text-align:center;"><em">Calories : </em>${lunch}<em">cal</em></p>
                                     <p class="card-text" id="pricel" style ="text-align:center;">${pricel} <em">MMK</em></p>
                                     <p class="card-text" id="idl" style ="text-align:center;"><em">IdNo : </em>${idl}</p>
                             </div>
                     </div>`;
                     $('.lunch').html(html1);

                     var html2="";
                     html2 +=`<div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="typed">${typed}</div>
                             <div class="card-body text-dark">
                                <h5 class="card-title" id="coded" style ="text-align:center;"><em">Codeno : </em>${codenod}</h5>
                                     <p class="card-text" id="foodpackagesd" style ="text-align:center;"><em">Food : </em>${foodpackagesd}</p>
                                     <p class="card-text" id="dinner" style ="text-align:center;"><em">Calories : </em>${dinner} <em">cal</em></p>
                                     <p class="card-text" id="priced" style ="text-align:center;">${priced} <em">MMK</em></p>
                                     <p class="card-text" id="idd" style ="text-align:center;"><em">IdNo : </em>${idd}</p>
                             </div>
                     </div>`;
                     $('.dinner').html(html2);
              })
                 
          

           })
       
        })
    
  
   