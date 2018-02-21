@extends('layouts.main')

@section('content')
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center login-title">Please fill the following fields to reset password:</h1>
        @include('partials.messages')
        <div class="account-wall">
            <img class="profile-img" src="{{ asset('images/reset.png') }}"
                 alt="">
            {!! Form::open(['id'=>'form-login','route'=>'password.request','class'=>'form-signin']) !!}
                <input type="hidden" name="token" value="{{ $token }}">
                <input id="email" type="email" name="email" placeholder="Email" value="{{ $email or old('email') }}" required autofocus>
                <input id="password" type="password" name="password" placeholder="New Password" required>
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button class="btn1 btn-1 btn-1b" type="submit">Reset Password</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
