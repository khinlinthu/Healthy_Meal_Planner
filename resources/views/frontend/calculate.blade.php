@extends('frontendtemplate')

@section('content')
     <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Calculate your calories here!</h1>
      </div>
  </div>
  
 <div class="container my-5">

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
            <!--       <div class="col-md-2">
                    <div class="form-group">
                    <input class="form-control py-4" style="margin-top: 35px;" id="inches" type="text" placeholder="inches" name="name" />
                  </div> -->
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
              
              <button  type="submit" class="btn_register btn btn-secondary mainfullbtncolor btn-block"> Calculate</button>

            </div>
          </form>
      </div>
    </div>
    
    
    

  </div>    <!-- Subcategory Title -->
    
@endsection

 @section('script')
  <script type="text/javascript">
        $(document).ready(function(){
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

              alert(calories + " calories");

           })
       
        })
    
  
    
    </script>
 @endsection