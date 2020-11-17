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
            <div class="col-2" style="margin-left: 850px;margin-top:-35px;display: inline-block;">
          <a href="{{route('foodpackage.index')}}" class="btn btn-outline-primary btn-block float-right"> 
                  <i class="fa fa-backward pr-2"></i> Go Back 
                </a>
        </div>
          <div class="card my-3">
            <div class="row no-gutters">

              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$foodpackage->foodpackages}} ({{$foodpackage->codeno}})</h5>
                  <p class="card-text">Type - {{$foodpackage->type}}</p>

                  <p class="card-text">Price - {{number_format($foodpackage->price)}} MMK</p>
                  <p class="card-text">WeightTarget - {{$foodpackage->weight_target}}</p>
                  <p class="card-text">Calories per g - {{$foodpackage->totalCalories}} per 1 g</p>
                  
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection