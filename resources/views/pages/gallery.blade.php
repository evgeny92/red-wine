@extends('layouts.main')

@section('title', '| Gallery')

@section('content')
    <!-- gallery -->
    <div class="gallery-top">
        <!-- container -->
        <div class="container">
            <div class="gallery-info">
                <h2>Gallery</h2>
            </div>
            <div class="gallery-grids-top">
                <div class="popup-gallery">
                    @foreach($images as $image)
                        <div class="col-sm-3 gallery-grid">
                            <div class="thumbnail">
                                <a href="{{ asset('images/gallery/' . $image->name) }}">
                                    <img src="{{ asset('images/gallery/' . $image->name) }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //gallery -->
@stop