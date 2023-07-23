@extends('layout.app')
@section('title')
    Home
@endsection

@section('contents')
@if(session()->has('msg'))
<div class="alert alert-success text-dark text-center" role="alert">
{{session('msg')}}</div>
@else

@endif

<div class="border border-2 shadow-md rounded m-2 p-3 bg-light text-dark justify-center text-center">
   <div class="container">
        <div class="row  g-3">

            <div class="col-md-4">
                <div class="card p-3 bg-primary text-light"style="max-width:18rem;">
                    <div class="card-title">
                        <a href="" class="link-light stretched-link">User Management</a>

                    </div>
                    <div class="card-body">
                       <i class="bx bxs-user bx-lg" ></i>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 bg-danger text-light"style="max-width:18rem;">
                    <div class="card-title">
                        <a href="" class="link-light stretched-link">Products Management</a>

                    </div>
                    <div class="card-body">
                       <i class="bx bxs-cart-download bx-lg"></i>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 bg-dark text-light"style="max-width:18rem;">
                    <div class="card-title">
                        <a href="" class="link-light stretched-link">Header</a>

                    </div>
                    <div class="card-body">
                       <i class="bx bxs-server bx-lg" ></i>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 bg-secondary text-light"style="max-width:18rem;">
                    <div class="card-title">
                        <a href="" class="link-light stretched-link">Header</a>

                    </div>
                    <div class="card-body">
                       <i class="bx bxs-data bx-lg" ></i>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
