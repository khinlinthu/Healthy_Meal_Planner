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
        <a href="index.php" class="btn mainfullbtncolor btn-outline-secondary float-right px-3" > 
          <i class="icofont-shopping-cart"></i>
          Continue Shopping 
        </a>
      </div>
    </div>


    <form method="" action="" class="checkout">
    <div class="row mt-5 shoppingcart_div">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>

              <th colspan="2"> FoodPackages</th>
              <th colspan="3"> Qty</th>
              <th>Price</th>
              <th>Subtotal</th>

            </tr>
          </thead>
          <tbody id="shoppingcart_table">
            

          </tbody>
        
          <tfoot id="shoppingcart_tfoot">
            
            <tr> 
              <td colspan="5"> 
                <textarea class="form-control notes" placeholder="Any Request..." required></textarea>
              </td>
              <td colspan="3">
               
               @role('customer')
                <button class="btn btn-secondary btn-block mainfullbtncolor"> 
                  Check Out 
                </button>
                @else
                <button class="btn btn-secondary btn-block mainfullbtncolor"> <a href="{{route('signinpage')}}"></a>
                   Please Signin 
                </button>
                @endrole
              </td>

            </tr>
          </tfoot>
        </table>
      </div>
    </div>

</form>
    

  </div>


@endsection

@section('script')

  <script type="text/javascript">
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

    $(document).ready(function () {
        $('.checkout').submit(function(e){
          let notes = $('.notes').val();
          if (notes === "") {
            return true;
          }else{
            let order = localStorage.getItem('foodpackage'); // JSON String
            console.log(order);
            $.post("{{route('order.store')}}",{order:order,notes:notes},function (response) {
              alert(response.msg);
              localStorage.clear();
              location.href="/";
            })
            e.preventDefault();
          }
        })
      })
    </script>
 
@endsection