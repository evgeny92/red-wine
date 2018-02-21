@extends('layouts.main')

@section('title', '| Login')

@section('content')
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Please fill the following fields to log in:</h1>
            @if (session('status'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('status') }}
                </div>
            @endif
            @include('partials.messages')
            <div class="account-wall">
                <img class="profile-img" src="{{ asset('images/login.png') }}"
                     alt="">
                {!! Form::open(['id'=>'form-login','route'=>'login','class'=>'form-signin']) !!}
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" maxlength="100" required autofocus>
                    <input id="password" type="password" name="password" placeholder="Password" maxlength="50" required>
                    <button type="submit" class="btn1 btn-1 btn-1b">Sign In</button>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                    <a class="password-forgot" href="{{ route('password.request') }}">Forgot Your Password?</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
