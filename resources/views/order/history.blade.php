@extends('frontendtemplate')

@section('content')

<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Order History </h1>
  		</div>
	</div>
	
	
	<!-- Content -->
	<div class="container mt-5">
		
		<div class="row justify-content-center">
			@foreach($orderdetail as $od)
			<div class="col-sm-4 my-3">
			    <div class="card orderCard">
			      	<div class="card-body">
			        	<h5 class="card-title"> {{ Auth::user()->name }}</h5>
			        	<p class="card-text"> Invoice #: {{$od->codeno}} </p>
			        	<p class="card-text"> Date: {{$od->orderdate}} </p>
			        	<p class="card-text"> Foodpackage: {{$od->foodpackages}} </p>
			        	<p class="card-text"> Weight Target: {{$od->weight_target}} </p>
			        	<p class="card-text"> Type: {{$od->type}} </p>
			        	<p class="card-text"> PRICE: {{$od->price}} </p>
			        	<p class="card-text"> Qty: {{$od->quantity}} </p>
			      	</div>
			    </div>
			</div>	
			@endforeach		
		</div>
	</div>


<!-- Modal -->
{{-- <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h6 class="modal-title" id="exampleModalLabel"> 
	        		Order Detail
	        	</h6>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-9">
	        				<h5> Invoice # <span id="invoiceNo"></span> </h5>
	        				<h6> Date : <span id="dateNo"></span> </h6>


	        			</div>
	        			<div class="col-3" id="orderStatus">
	        				
	        			</div>
	        		</div>

	        		<div class="col-12 mt-3">

	        			<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th colspan="2"> Product </th>
										<th> Qty </th>
										<th> Price </th>
										<th> Total </th>
									</tr>
								</thead>
								<tbody id="orderDetail">
								</tbody>
								<tfoot id="shoppingcart_tfoot">
									<tr>
										<td colspan="8">
											<h3 class="text-right"> Total : <span id="orderTotal"></span> </h3>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
	        		</div>

	        	</div>
	      	</div>
	    </div>
	</div>
</div> --}}

@endsection