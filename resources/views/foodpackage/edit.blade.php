@extends('backendtemplate')

@section('content')

		
	  <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">

				<h2>Foodpackages</h2>
					<div class="col-2" style="margin-left: 850px;margin-top:-35px;display: inline-block;">
					<a href="{{route('foodpackage.index')}}" class="btn btn-outline-primary btn-block float-right"> 
	            		<i class="fa fa-backward pr-2"></i>	Go Back 
	            	</a>
				</div>
				<form action="{{route('foodpackage.update',$foodpackage->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')

				    <div class="form-group">
			              <label>Foodpackages</label>
			              <textarea class="form-control @error('foodpackages') is-invalid @enderror" name="foodpackages">{{$foodpackage->foodpackages}}</textarea>
			              @error('foodpackages')
			                <span class="invalid-feedback" role="alert">
			                  <strong>{{ $message }}</strong>
			                </span>
			              @enderror
	            	</div>
					<div class="form-group">
						<label>TotalCalories</label>
						<input type="text" name="totalCalories" class="form-control @error('totalCalories') is-invalid @enderror" value="{{$foodpackage->totalCalories}}">
						@error('totalCalories')
						<span class="invalid-feedback" role="alert">
								<strong>{{$message}}</strong>
						</span>
					
						@enderror
					</div>
					 <div class="form-group">
				          <label>Price: </label>
				          <ul class="nav nav-tabs" id="myTab" role="tablist">
				            <li class="nav-item" role="presentation">
				              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Current</a>
				            </li>
				            <li class="nav-item" role="presentation">
				              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount</a>
				            </li>
				          </ul>
				          <div class="tab-content mt-3" id="myTabContent">
				            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				              <input type="number" name="price" class="form-control" value="{{$foodpackage->price}}">
				            </div>
				            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				              <input type="number" name="discount" class="form-control" value="{{$foodpackage->discount}}">
				            </div>
				          </div>
				        </div>

		            <div class="form-group">
		              <label>Weight-target</label>
		              <select name="weight_target" class="form-control" >
		                <option value="Weight-loss" <?=$foodpackage->weight_target == 'Weight-loss' ? ' selected="selected"' : '';?>>Weight-loss</option>
		                <option value="Weight-gain" <?=$foodpackage->weight_target == 'Weight-gain' ? ' selected="selected"' : '';?>>Weight-gain</option>
		                <option value="Current-weight" <?=$foodpackage->weight_target == 'Current-weight' ? ' selected="selected"' : '';?>>Current-weight</option>
		              </select>
		            </div>
		            <div class="form-group">
		              <label>Type</label>
		              <select name="type" class="form-control" >
		                <option value="Breakfast"<?=$foodpackage->type == 'Breakfast' ? ' selected="selected"' : '';?>>Breakfast</option>
		                <option value="Lunch" <?=$foodpackage->type == 'Lunch' ? ' selected="selected"' : '';?>>Lunch</option>
		                <option value="Dinner" <?=$foodpackage->type == 'Dinner' ? ' selected="selected"' : '';?>>Dinner</option>
		              </select>
		            </div>
		            
					<div class="form-group">
						<input type="submit" name="btnsubmit" value="Update" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
	</div>
</main>

@endsection