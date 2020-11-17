@extends('frontendtemplate')

@section('content')
  <!-- Subcategory Title -->
  <div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        <h1 class="text-center text-white"> Your Shopping Cart </h1>
      </div>
  </div>
  
  <!-- Content -->
  <div class="container mt-5">
    
    <!-- Shopping Cart Div -->
    <div class="row mt-5 shoppingcart_div">
      <div class="col-12">
        <a href="index.php" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
          <i class="icofont-shopping-cart"></i>
          Continue Shopping 
        </a>
      </div>
    </div>

    <div class="row mt-5 shoppingcart_div">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th colspan="2"> Breakfast</th>
              <th colspan="2"> Lunch</th>
              <th colspan="2">Dinner</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Subotal</th>
            </tr>
          </thead>
          <tbody id="shoppingcart_table">
            

          </tbody>
        
          <tfoot id="shoppingcart_tfoot">
            
            <tr> 
              <td colspan="5"> 
                <textarea class="form-control notes" placeholder="Any Request..."></textarea>
              </td>
              <td colspan="3">
               
                <button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn"> 
                  Check Out 
                </button>
              </td>

            </tr>
          </tfoot>
        </table>
      </div>
    </div>


    

  </div>


@endsection

@section('script')
  <script type="text/javascript" src="{{asset('my_asset/js/custom.js')}}"></script>
 
@endsection