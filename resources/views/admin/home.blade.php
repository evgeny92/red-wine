@extends('admin.layout.main')

@section('title', '| Home')

@section('content')

    <div class="col-md-6 col-md-offset-3">
        <div class="well well-lg">
            <h2 class="text-center">Welcome To Admin Panel</h2>
            <p class="text-center">Here you can manipulate various operations, such as (CREATE, EDITE, UPDATE, DELETE).</p>
            <br>
            <a href="{{ url('admin/posts/create') }}" class="btn btn-success btn-block btn-fill">Add New Post</a>
            <a href="{{ url('admin/categories') }}" class="btn btn-success btn-block btn-fill">Add New Category</a>
            <a href="{{ url('admin/gallery') }}" class="btn btn-success btn-block btn-fill">Add New Photo</a>
        </div>
    </div>
@stop
