@extends('frontendtemplate')

@section('content')
     <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Calculate your calories here!</h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container my-5">

    <div class="row justify-content-center">
      <div class="col-md-12" style="padding-left: 300px;">
        <form action="bookingone.php" method="POST">
              <div class="form-row">
                        <div class="col-md-10">
                            <div class="form-group">
                              <label class="small mb-1" for="inputName"> Height</label>
                              <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" />
                            </div>
                        </div>
                       <!--   <div class="col-md-2">
                              <div class="form-group">
                                <input type="text" name="meter" value="meters" disabled="true" class="form-control py-4" style="margin-top: 50px;">
                              </div>
                        </div> -->
                </div>

                <div class="form-row">
                  <div class="col-md-10">
                            <div class="form-group">
                              <label class="small mb-1" for="phone">Weight</label>
                              <input class="form-control py-4" id="phone" type="text" placeholder="Enter Phone Number" name="phone" />
                            </div>
                        </div>
                    <!--  <div class="col-md-2">
                              <div class="form-group">
                                <input type="text" name="kilo" value="kilos" disabled="true" class="form-control py-4" style="margin-top: 20px;">
                              </div>
                        </div> -->
                </div>
                
                 <div class="form-row">
                        <div class="col-md-10">
                            <label class="small mb-1" for="phone">Age</label>
                            <select class="form-control select2 form-control-lg" name="menu">
                                <option> 18 to 25</option>
                                <option> 26-35</option>
                                <option> 36-45</option>
                            </select>
                     </div>
                 </div>
                  <div class="form-row" >
                        <div class="col-md-10" style="margin-top: 10px;">
                            <label class="small mt-3" for="phone">How much exercise do you play?</label>
                            <select class="form-control select2 form-control-lg" name="menu">
                                <option> Always</option>
                                <option> Sometimes</option>
                                <option> Never</option>
                            </select>
                     </div>
                 </div>
                  <div class="form-row">
                        <div class="col-md-10" style="margin-top: 10px;">
                            <label class="small mb-1" for="phone">Weight Target</label>
                            <select class="form-control select2 form-control-lg" name="menu">
                                <option> Weight-gain</option>
                                <option> Weight-loss</option>
                                <option> Current-weight</option>
                            </select>
                     </div>
                 </div>


                  

              
              <div class=" col-md-10 form-group d-flex align-items-center justify-content-between mt-4 mb-0 "  style="margin-top: 20px;">
                
                <button type="Submit" class="btn_register btn btn-secondary mainfullbtncolor btn-block"> Calculate</button>
              </div>
          </form>
      </div>
    </div>
    
    
    

  </div>    <!-- Subcategory Title -->
    
@endsection