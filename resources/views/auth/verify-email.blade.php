@extends('layout.app')
@section('title')
    Forget Password
@endsection

@section('contents')
@if (session()->has('msg'))
<div class="alert alert-danger" role="alert">
    <strong>{{ session('msg') }}</strong>
</div>
@endif
<div class="container">
    <div class="border text-center h2 text-dark bg-info p-5 m-5">

        we have sent the verification link to your email {{Auth::user()->email}}
        <form action="{{route('verification.send')}}" method="post">
            <button type="submit" class="link-danger m-3 p-3 h6">Resend the link</button>

        </form>
    </div>
</div>
@endsection
