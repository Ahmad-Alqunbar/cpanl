@extends('layout.app')
@section('title')
    Products
@endsection
@php
    use Illuminate\Support\Facades\Storage;

@endphp
@section('contents')
@if(session()->has('msg'))
<div class="alert alert-success text-dark text-center" role="alert">
{{session('msg')}}</div>
@else

@endif
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <a href="{{Route('products.create')}}" class="m-3 btn btn-dark">Add</a>

                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">Owner</th>

                        <th scope="col">Image</th>
                        <th scope="col">View</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>

                    </thead>
                    <tbody>
                         @foreach ($products as $product )
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->user->name}}</td>

                                <td>
                                    <img src="{{ url('storage/products/'.$product->image) }}" alt="" style="width:100px;height:100px;">
                                </td>
                                <td><a href="{{route('products.show',$product->id)}}"class="btn btn-success">view</a></td>
                                <td><a href="{{route('products.edit',$product->id)}}"class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{route('products.destroy',$product->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure ?')">Delete</button>
                                </form>
                                </td>
                            </tr>

                          @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
