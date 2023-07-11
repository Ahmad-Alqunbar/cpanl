@extends('layout.app')
@section('title')
    Home
@endsection

@section('contents')

<div class="border rounded m-2 p-3 bg-light text-dark justify-center text-center">
  <div class="container">
    <div class="row mt-5 g-3">

            <div class="col-md-4">
                <div class="card p-3 bg-primary text-light">
                    <div class="card-title">
                        <a href="" class="link-light stretched-link">Header</a>

                    </div>
                    <div class="card-body">
                       Body of Card
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 bg-primary text-light">
                    <div class="card-title">
                          Header
                    </div>
                    <div class="card-body">
                       Body of Card
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 bg-primary text-light">
                    <div class="card-title">
                          Header
                    </div>
                    <div class="card-body">
                       Body of Card
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 bg-primary text-light">
                    <div class="card-title">
                          Header
                    </div>
                    <div class="card-body">
                       Body of Card
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
