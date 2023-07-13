@extends('layout.app')
@section('title')
Register
@endsection

@section('contents')
<section class="h-100 bg-dark my-5">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="{{asset('images/register.jpg')}}"alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                    @if(session()->has('msg'))
                      <div class="alert alert-danger" role="alert">
                        <strong>{{session('msg')}}</strong>
                      </div>
                    @endif
                  <h5 class="text-center mb-5 text-uppercase"> registration form</h3>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1m"> Name</label>
                            <input type="text" id="form3Example1m"name="name" class="form-control form-control-lg" />
                            @error('name')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </div>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1n">E-mail</label>
                            <input type="text" id="form3Example1n"name="email" class="form-control form-control-lg" />
                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </div>
                            @enderror
                        </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1m1">Password</label>
                            <input type="password" id="form3Example1m1" name="password" class="form-control form-control-lg" />
                            @error('password')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{$message}}</strong>
                            </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="form3Example1n1">Confirm Password</label>
                            <input type="password"name="password_confirmation" id="form3Example1n1" class="form-control form-control-lg" />
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center pt-3">
                        <input style="width: 100%;" type="submit" class="btn btn-warning  btn-lg "value="Register">
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
