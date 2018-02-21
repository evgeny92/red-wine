@extends('admin.layout.main')

@section('title', '| Change Name')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @include('admin.partials.messages')
                <div class="card">
                    <div class="header">Change Name</div>
                    <div class="content">
                        {!! Form::open(['route'=>'changeName','data-parsley-validate'=>'']) !!}
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter new name" minlength="2" maxlength="20"  required>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill btn-md">Change Name</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop