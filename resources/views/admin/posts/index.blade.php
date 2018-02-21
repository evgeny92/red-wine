@extends('admin.layout.main')

@section('title', '| Posts')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('admin.partials.messages')
                <div class="header">
                    <div class="col-md-12">
                        All Posts
                        <a href="{{ route('posts.create') }}" class="btn btn-success pull-right">Create Post</a>
                    </div>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover">
                        <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Created At</th>
                        </thead>
                        <tbody>
                        @foreach($posts as $post )
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ str_limit($post->title, 30) }}</td>
                                <td><img src="{{ asset('images/posts/'.$post->image) }}" width="100" height="50"></td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->created_at->format('d.m.y') }}</td>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">{!! $posts->links() !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
