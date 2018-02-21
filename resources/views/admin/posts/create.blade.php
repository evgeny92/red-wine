@extends('admin.layout.main')

@section('title', '| Create Post')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @include('admin.partials.messages')
                    <div class="header">
                        <h4 class="title">Create New Post</h4>
                    </div>
                    <div class="content">
                        {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '', 'files' => 'true']) !!}
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="form-group">
                                        {{ Form::label('title', 'Title: ') }}
                                        {{ Form::text('title', null,  ['class' => 'form-control', 'required' => '', 'minlength' => '15', 'maxlength' => '100']) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('slug_post', 'Slug: ') }}
                                        {{ Form::text('slug_post', null,  ['class' => 'form-control', 'required' => '', 'minlength' => '15', 'maxlength' => '100']) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('category_id', 'Category:') }}
                                        <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('image', 'Upload Image:') }}
                                        {{ Form::file('image', ['class' => 'form-control', 'required' => '']) }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('body', 'Post Body:') }}
                                        {{ Form::textarea('body', null,['id'=>'editor1','row'=>'30','class'=>'form-control','required'=>'']) }}

                                    </div>

                                    {{ Form::submit('Create Post', ['class'=>'btn btn-success btn-lg btn-block']) }}

                                </div>

                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')

<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>
@endsection