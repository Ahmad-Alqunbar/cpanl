@extends('layout.app')
@section('title')
    Forget Password
@endsection

@section('contents')
    <section class="h-100 bg-dark my-5">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="{{ asset('images/register.jpg') }}"alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    @if (session()->has('msg'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ session('msg') }}</strong>
                                        </div>
                                    @endif
                                    <h3 class="mb-5 text-uppercase"> Forget Password</h3>
                                    <form action="{{route('password.request')}}" method="post">
                                        <div class="row">

                                            @csrf
                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">E-mail</label>

                                                    <input type="text" id="form3Example1n"name="email"
                                                        class="form-control form-control-lg" />
                                                    @error('email')
                                                        <div class="alert alert-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>



                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <input type="submit" class="btn btn-warning btn-lg ms-2"value="Send">
                                        </div>


                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
