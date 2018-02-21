@extends('admin.layout.main')

@section('title', '| Post Show')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">

                    <div class="header">
                        <h4 class="title">{{ $post->title }}</h4>
                    </div>
                    <div class="content">
                        <img src="{{ asset('images/posts/'. $post->image) }}" class="img-responsive" alt="">
                        <p class="lead">{!! $post->body !!}</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>Category:</label>
                        <p>{{ $post->category->name }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Created At:</label>
                        <p>{{ $post->created_at->format('d.m.y H:i') }}</p>
                    </dl>
                    <dl class="dl-horizontal">
                        <label>Last Updated:</label>
                        <p>{{ $post->updated_at->format('d.m.y H:i') }}</p>
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-warning btn-block']) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => "return confirm('Are you sure you want to delete this post?');"])!!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Html::linkRoute('posts.index', '&laquo; See All Posts', [], ['class' => 'btn btn-info btn-block']) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
