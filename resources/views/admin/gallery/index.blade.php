@extends('admin.layout.main')

@section('title', '| Gallery')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    @include('admin.partials.messages')
                    <div class="header">
                        All Photo Gallery
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Created At</th>
                            </thead>
                            <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td>{{ $file->id}}</td>
                                    <td>{{ $file->name }}</td>
                                   <td><img src="{{ asset('images/gallery/'. $file->name) }}" width="100" height="50"></td>
                                    <td>{{ $file->created_at->format('d.m.y H:i') }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['gallery.destroy', $file->id], 'method' => 'DELETE']) !!}
                                        {!! Form::submit('Delete', ['id' => 'btn-delete', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure you want to delete this image?');"])!!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">{!! $files->links() !!}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="header">
                        Add New Images
                    </div>
                    <div class="content">
                        {!! Form::open(['route' => 'gallery.store', 'data-parsley-validate' => '',  'files' => 'true']) !!}

                        <div class="form-group">
                            {{ Form::label('file', 'Upload Images:') }}
                            {{ Form::file('file[]', ['class' => 'form-control', 'required' => '', 'multiple']) }}
                        </div>

                        {{ Form::submit('Upload Images', ['id' => 'btn-upload', 'class'=>'btn btn-success btn-md']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


