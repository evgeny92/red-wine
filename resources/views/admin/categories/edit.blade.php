@extends('admin.layout.main')

@section('title', '| Edit Category')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    @include('admin.partials.messages')
                    <div class="header">
                        <h4 class="title">Edit Category</h4>
                    </div>
                    <div class="content">
                        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT', 'data-parsley-validate' => '' ]) !!}
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    {{ Form::label('name', 'Name: ') }}
                                    {{ Form::text('name', null,  ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '50']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('slug_cat', 'Slug: ') }}
                                    {{ Form::text('slug_cat', null,  ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '50']) }}
                                </div>
                                <br>
                                {{ Form::submit('Edit Category', ['class'=>'btn btn-warning btn-md btn-block']) }}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop