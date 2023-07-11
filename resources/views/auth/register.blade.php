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
                  <h3 class="mb-5 text-uppercase"> registration form</h3>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m"name="name" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m"> Name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1n"name="email" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1n">E-mail</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="password" id="form3Example1m1" name="password" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1m1">Password</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="password"name="confirmation_password" id="form3Example1n1" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1n1">Confirm Password</label>
                      </div>
                    </div>
                  </div>

                 
                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" class="btn btn-light btn-lg">Reset all</button>
                    <button type="button" class="btn btn-warning btn-lg ms-2">Submit form</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
