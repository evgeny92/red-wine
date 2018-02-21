@extends('admin.layout.main')

@section('title', '| Categories')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    @include('admin.partials.messages')
                    <div class="header">All Categories</div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            </thead>
                            <tbody>
                            @foreach($categories as $category )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug_cat }}</td>
                                    <td>{{ $category->created_at->format('d.m.y') }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>{!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Delete', ['id' => 'btn-delete', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure you want to delete this category?');"])!!}
                                        {!! Form::close() !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        Add New Category
                    </div>
                    <div class="content">
                        {!! Form::open(['route' => 'categories.store', 'data-parsley-validate' => '']) !!}

                                <div class="form-group">
                                    {{ Form::label('name', 'Name: ') }}
                                    {{ Form::text('name', null,  ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '50']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('slug_cat', 'Slug: ') }}
                                    {{ Form::text('slug_cat', null,  ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '50']) }}
                                </div>

                                {{ Form::submit('Create Category', ['id' => 'btn-create', 'class'=>'btn btn-success btn-md']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
