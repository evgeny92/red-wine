@extends('layouts.main')

@section('title', '| Home')

@section('content')

<!-- welcome -->
<div class="welcome">
    <!-- container -->
    <div class="container">
        <div class="welcome-info">
            <h2>Welcome</h2>
            <h5>Lorem ipsum dolor sit amet consectetur adipiscing elit.</h5>
            <p>Morbi condimentum imperdiet placerat. Nullam in nisl eget turpis convallis venenatis. Cras cursus elementum justo nec bibendum. Donec quis nisi cursus, vestibulum elit eget, sagittis ligula.</p>
        </div>
    </div>
    <!-- //container -->
</div>
<!-- welcome -->
<!-- work -->
<div class="work">
    <!-- container -->
    <div class="container">
        <div class="work-info">
            <h3>Popular Wines</h3>
        </div>
        <div class="work-grids">
            <div class="col-md-4 work-grid-left">
                <h5>Red Wine</h5>
                <p>Red wine is a type of wine made from dark-colored grape varieties. The actual color of the wine can range from intense violet, typical of young wines</p>
            </div>
            <div class="col-md-4 work-grid-left">
                <h5>White Wine</h5>
                <p>White wine is a wine whose colour can be straw-yellow, yellow-green, or yellow-gold.. Flavors span from rich and creamy to light and zesty.</p>
            </div>
            <div class="col-md-4 work-grid-left">
                <h5>Rose Wine</h5>
                <p>Still wine from black grapes produced by removing the skins before they deeply color the wine. Also formed by blending red and white wine together.</p>
            </div>
        </div>
    </div>
    <!-- //container -->
</div>
<!-- //work -->
<!-- news -->
<div class="news">
    <!-- container -->
    <div class="container">
        <div class="news-info">
            <h3>News & Events</h3>
        </div>
        <div class="news-grids">
            @foreach($posts as $post)
            <div class="col-md-6 news-grid">
                <img src="{{ asset('images/posts/' . $post->image) }}" alt="" />
                <div class="news-grid-info">
                    <a href="{{ url('blog', $post->slug_post) }}">{{ $post->title }}</a>
                    <p class="date"> Published on {{ $post->created_at->format('F d, Y') }}
                    <p class="text">{{ str_limit(strip_tags($post->body), 160) }}</p>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //container -->
</div>
<!-- //news -->
@stop