@extends('layouts.main')

@section('title', '| Contact')

@section('content')
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="contact-info">
                <h2>Contact</h2>
            </div>
            <div class="map">
                <h4>How to find us :</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3771907.975236311!2d-2.09480472072984!3d39.07355564363949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436857347604"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="address">
                <div class="col-md-4 address-grids">
                    <h4>Address :</h4>
                    <ul>
                        <li><p>Eiusmod Tempor inc<br>
                                St Dolore Place,<br>
                                Kingsport 56777</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 address-grids">
                    <h4>Phone :</h4>
                    <p>+2 123 456 789</p>
                    <p>+2 987 654 321</p>
                </div>
                <div class="col-md-4 address-grids">
                    <h4>Email :</h4>
                    <p><a href="mailto:example@email.com">mail@example.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="contact-infom">
                <h4>Miscellaneous Information:</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sheets containing Lorem Ipsum passages,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.It was popularised in the 1960s
                    with the release of Letraset
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
            </div>
            <div class="contact-form">
                <h4>Contact Form</h4>
                {!! Form::open(['id' => 'contact-form']) !!}
                    {{ Form::text('name', null,  ['id'=> 'name', 'placeholder'=> 'Name (Only letters)', 'required' => '', 'minlength' => '2']) }}
                    {{ Form::email('email', null,  ['id'=> 'email','placeholder'=> 'Email','required' => '', 'maxlength' => '50']) }}
                    {{ Form::text('phone', null,  ['id'=> 'phone','placeholder'=> 'Phone','required' => '']) }}
                    {{ Form::textarea('notice', null, ['id'=> 'notice','placeholder'=> 'Message','required' => '']) }}
                    {{ Form::submit('Submit', ['id'=>'btn-submit', 'class'=>'btn1 btn-1 btn-1b']) }}
                    <span class="output_message"></span>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- //contact -->
@stop