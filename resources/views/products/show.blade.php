@extends('layout.app')
@section('title')
    Products
@endsection
@php
    use Illuminate\Support\Facades\Storage;

@endphp
@section('contents')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <a href="{{Route('products.index')}}" class="m-3 btn btn-dark">back</a>

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
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->user->name}}</td>

                                <td>
                                    <img src="{{ url('storage/products/'.$product->image) }}" alt="" style="width:100px;height:100px;">
                                </td>
                                <td></td>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>


                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
