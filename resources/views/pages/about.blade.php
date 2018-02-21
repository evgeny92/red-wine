@extends('layouts.main')

@section('title', '| About')

@section('content')

<!-- about -->
<div class="about">
    <div class="about-info">
        <!-- container -->
        <div class="container">
            <h2>About us</h2>
        </div>
        <!-- //container -->
    </div>
    <!-- about-bottom -->
    <div class="about-bottom">
        <!-- container -->
        <div class="container">
            <div class="about-grids">
                <div class="col-md-6 about-grid">
                    <h3>A brief history of about us</h3>
                    <h5>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</h5>
                    <p>Morbi condimentum imperdiet placerat. Nullam in nisl eget turpis convallis venenatis. Cras cursus elementum justo nec bibendum. Donec quis nisi cursus, vestibulum elit eget, sagittis ligula. Suspendisse urna metus, posuere interdum tempor at, convallis a enim. Fusce vel egestas eros, sit amet maximus dolor urna metus, posuere interdum tempor at, convallis a enim. Fusce vel urna metus, posuere interdum tempor at, convallis a enim. Fusce vel egestas eros, sit amet maximus dolor egestas eros, sit amet maximus dolor. Suspendisse vitae nibh at erat sollicitudin bibendum. Aenean pretium turpis eget vestibulum vulputate.</p>
                </div>
                <div class="col-md-6 about-grid">
                    <img src="{{ asset('images/11.jpg') }}" alt="" />
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- container -->
    </div>
    <!-- about-bottom -->
    <!-- choose -->
    <div class="choose">
        <!-- container -->
        <div class="container">
            <h3>Why choose us</h3>
            <div class="choose-grids">
                <div class="col-md-4 choose-grid">
                    <h5>Donec cursus felis a enim egestas, vitae porttitor elit condimentum.</h5>
                    <p>Etiam ex lorem, cursus vitae placerat a, suscipit dapibus tortor. Sed nec augue enim. Cras rhoncus ultricies eros, interdum aliquam eros iaculis id.</p>
                </div>
                <div class="col-md-4 choose-grid">
                    <h5>Donec cursus felis a enim egestas, vitae porttitor elit condimentum.</h5>
                    <p>Etiam ex lorem, cursus vitae placerat a, suscipit dapibus tortor. Sed nec augue enim. Cras rhoncus ultricies eros, interdum aliquam eros iaculis id.</p>
                </div>
                <div class="col-md-4 choose-grid">
                    <h5>Donec cursus felis a enim egestas, vitae porttitor elit condimentum.</h5>
                    <p>Etiam ex lorem, cursus vitae placerat a, suscipit dapibus tortor. Sed nec augue enim. Cras rhoncus ultricies eros, interdum aliquam eros iaculis id.</p>
                </div>
                {{--<div class="clearfix"> </div>--}}
            </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //choose -->
    <!-- about-team -->
    <div class="about-team">
        <!-- container-wrap -->
        <div class="container">
            <h3>Our Team</h3>
            <div class="team-grids">
                <div class="col-md-3 team-grid">
                    <img src="{{ asset('images/t1.jpg') }}" alt="">
                    <h6>convallis id mauris</h6>
                    <p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
                </div>
                <div class="col-md-3 team-grid">
                    <img src="{{ asset('images/t2.jpg') }}" alt="">
                    <h6>massa convallis</h6>
                    <p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
                </div>
                <div class="col-md-3 team-grid">
                    <img src="{{ asset('images/t3.jpg') }}" alt="">
                    <h6>leonec purus</h6>
                    <p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
                </div>
                <div class="col-md-3 team-grid">
                    <img src="{{ asset('images/t4.jpg') }}" alt="">
                    <h6>venenatis portt</h6>
                    <p> Curabitur orci massa convallis id mauris sed venenatis porttitor at leo nec purus</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //about-team -->
</div>
<!-- //about -->
@stop