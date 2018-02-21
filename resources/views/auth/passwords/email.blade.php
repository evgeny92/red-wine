@extends('layouts.main')

@section('content')
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center login-title">Please fill the following field and check your email:</h1>
        @if (session('status'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('status') }}
            </div>
        @endif
        @include('partials.messages')
        <div class="account-wall">
            <img class="profile-img" src="{{ asset('images/email.png') }}"
                 alt="">
            {!! Form::open(['route'=>'password.email','class'=>'form-signin']) !!}
                <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" maxlength="100" required>
                <button class="btn1 btn-1 btn-1b" type="submit">Send Password Reset Link</button>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
