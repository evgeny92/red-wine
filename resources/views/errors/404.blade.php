@extends('layouts.main')

@section('title', '| Page Not found')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1>Oops!</h1>
                    <h2>404 Not Found</h2>
                    <div class="error-details">
                        Sorry, an error has occured. Requested page not found!
                    </div>
                    <div class="error-actions">
                        <a href="{{ url('/') }}" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-home"></span> Home Page </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection