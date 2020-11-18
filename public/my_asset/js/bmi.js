

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
                    
                    // var html4 = "";
                    // html4 +=`
                    //    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    //         <div class="card-header">Your Result</div>
                    //         <div class="card-body">
                    //           <p class="card-text"><h5 style = 'display:inline-block;'>Breakfast for</h5>${BtotalgramToEat} <h5 style = 'display:inline-block;'> g</h5></p>
                    //           <p class="card-text"><h5 style = 'display:inline-block;'>Lunch for </h5>${LtotalgramToEat} <h5 style = 'display:inline-block;'>g</h5></p>
                    //           <p class="card-text"><h5 style = 'display:inline-block;'>Dinner for </h5>${DtotalgramToEat} <h5 style = 'display:inline-block;'>g</h5></p>
                    //         </div>
                    //     </div> `;
                    //     $('.results').html(html4);

                    $(".bmi").hide();
                    $(".showdetail").show();
                    $(".gif").hide();
                    $("#title").show();
                    $("#food").show();
                
                 var html = "";
                 html +=`<div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="typeb"><p style="text-align:center;">${typeb}</p></div>
                             <div class="card-body text-dark">
                                <h5 class="card-title" id="codeb"><h5 style="display:inline-block;">Codeno : </h5>${codenob}</h5>
                                     <p class="card-text" id="foodpackagesb"><h5 style="display:inline-block;">Food : </h5>${foodpackagesb}</p>
                                     <p class="card-text" id="breakfast"><h5 style="display:inline-block;">Totalcalories : </h5>${breakfast}</p>
                                     <p class="card-text" id="priceb"><h5 style="display:inline-block;">Price : </h5> ${priceb} <h5 style="display:inline-block">MMK</h5></p>
                                     <p class="card-text" id="idb"><h5 style="display:inline-block;">IdNo : </h5>${idb}</p>
                             </div>
                     </div>`;
                
                     // console.log(html);
                     $('.breakfast').html(html);

                     var html1="";
                     html1 +=`<div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="typeb"><p style="text-align:center;">${typel}</p></div>
                             <div class="card-body text-dark">
                                <h5 class="card-title" id="codeb"><h5 style="display:inline-block;">Codeno : </h5>${codenol}</h5>
                                     <p class="card-text" id="foodpackagesb"><h5 style="display:inline-block;">Food : </h5>${foodpackagesl}</p>
                                     <p class="card-text" id="breakfast"><h5 style="display:inline-block;">Totalcalories : </h5>${lunch}</p>
                                     <p class="card-text" id="priceb"><h5 style="display:inline-block;">Price : </h5> ${pricel} <h5 style="display:inline-block">MMK</h5></p>
                                     <p class="card-text" id="idb"><h5 style="display:inline-block;">IdNo : </h5>${idl}</p>
                             </div>
                     </div>`;
                     $('.lunch').html(html1);

                     var html2="";
                     html2 +=`<div class="card border-dark mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="typeb"><p style="text-align:center;">${typed}</p></div>
                             <div class="card-body text-dark">
                                <h5 class="card-title" id="codeb"><h5 style="display:inline-block;">Codeno : </h5>${codenod}</h5>
                                     <p class="card-text" id="foodpackagesb"><h5 style="display:inline-block;">Food : </h5>${foodpackagesd}</p>
                                     <p class="card-text" id="breakfast"><h5 style="display:inline-block;">Totalcalories : </h5>${dinner}</p>
                                     <p class="card-text" id="priceb"><h5 style="display:inline-block;">Price : </h5> ${priced} <h5 style="display:inline-block">MMK</h5></p>
                                     <p class="card-text" id="idb"><h5 style="display:inline-block;">IdNo : </h5>${idd}</p>
                             </div>
                     </div>`;
                     $('.dinner').html(html2);
              })
                 
          

           })
       
        })
    
  
   