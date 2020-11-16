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
          <h2>Foodpackages Detail</h2>

          <div class="card my-3">
            <div class="row no-gutters">

              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$foodpackage->foodpackages}} ({{$foodpackage->codeno}})</h5>
                  <p class="card-text">{{number_format($foodpackage->price)}} MMK</p>
                  <p class="card-text">{{$foodpackage->totalCalories}}</p>
                  <p class="card-text">{{$foodpackage->weight_target}}</p>
                  <p class="card-text">{{$foodpackage->type}}</p>


                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection