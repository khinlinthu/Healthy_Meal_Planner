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
          <h2>Order Detail</h2>

          <p>Orderno: {{$order->orderno}}</p>
          <p>Orderdate: {{$order->orderdate}}</p>
          <p>Customer: {{$order->user->name}}</p>

          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Foodpackage</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; $total=0; @endphp
              @foreach($order->foodpackages as $foodpackage)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$foodpackage->foodpackages}}</td>
                <td>{{$foodpackage->price}}</td>
                <td>{{$foodpackage->pivot->quantity}}</td>
                <td>{{$foodpackage->price * $foodpackage->pivot->quantity}}</td>
              </tr>
              @php $total+= $foodpackage->price * $foodpackage->pivot->quantity; @endphp
              @endforeach

              <tr>
                <td colspan="4">Total</td>
                <td>{{$total}}</td>
              </tr>
            </tbody>
          </table>

          @if($order->status == 0)
          <form method="post" action="{{route('order.confirm',$order->id)}}">
            @csrf
            <button class="btn btn-info" type="submit">Confirm</button>
          </form>

          @elseif($order->status == 1)
            <button class="btn btn-success">Success Order</button>
            <button class="btn btn-success"><a href="{{route('index')}}"></a>Back</button>
          @endif
        </div>
      </div>
    </div>
  </main>
@endsection