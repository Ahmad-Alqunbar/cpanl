@extends('layout.app')
@section('title')
    Home
@endsection

@section('contents')
<div class="container">

    <div class="row mt-5 g-3">

@foreach ($products as $product )
<div class="col-md-4">
    <div class="card">
        <img src="{{url('storage/products/'.$product->image)}}" class="card-img-top" alt="..."style="height:250px;">
        <div class="card-body">
            <p class="card-text text-center">{{$product->name}}</p>
            <p class="card-text text-center">{{$product->price}}</p>
        </div>
      </div>
</div>
@endforeach


    </div>
</div>
@endsection
