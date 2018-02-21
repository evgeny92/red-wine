@extends('admin.layout.main')

@section('title', '| Change Email')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @include('admin.partials.messages')
                <div class="card">
                    <div class="header">Change Email</div>
                    <div class="content">
                        {!! Form::open(['route'=>'changeEmail','data-parsley-validate'=>'']) !!}
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Enter new email" class="form-control" maxlength="20"  required>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill btn-md">Change Email</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop