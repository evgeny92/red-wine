@extends('admin.layout.main')

@section('title', '| Change Password')

@section('content')
    <div class="container-fluid">
       <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @include('admin.partials.messages')
                <div class="card">
                    <div class="header">Change Password</div>
                    <div class="content">
                        {!! Form::open(['route'=>'changePassword','data-parsley-validate'=>'']) !!}
                            <div class="form-group">
                                <label>Old Password:</label>
                                <input type="password" name="old_password" id="old_password" class="form-control" minlength="6" maxlength="30"  required>
                            </div>
                            <div class="form-group">
                                <label>New Password:</label>
                                <input type="password" name="new_password" id="new_password"
                                       class="form-control"
                                       data-parsley-pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,30}.*"
                                       data-parsley-error-message="Password must be at least 6 characters, and include at least one lowercase letter, one uppercase letter, and a number."
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Confirm New Password:</label>
                                <input type="password" name="confirm_password" id="confirm_password"
                                       class="form-control"
                                       data-parsley-equalto="#new_password"
                                       required>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill btn-md">Change Password</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop