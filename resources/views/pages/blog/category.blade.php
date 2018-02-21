@extends('layouts.main')

@section('content')
    <div class="blog">
        <!-- container -->
        <div class="container">
            <div class="blog-text">
                <h2>{{ $category->name }}</h2>
            </div>
            <div class="blog-top-grids">
                <div class="col-md-8 blog-top-left-grid">
                    <div class="left-blog">

                       @foreach($category->post as $categoryPost)
                            <div class="blog-left">
                                <div class="blog-left-left">
                                    <p>Posted By <a href="#">Admin</a> on {{ $categoryPost->created_at->format('d.m.y H:i') }} </p>
                                    <a href="#"><img src="{{ asset('images/posts/'. $categoryPost->image) }}" alt="" /></a>
                                </div>
                                <div class="blog-left-right">
                                    <a href="{{ route('pages.blog.single', $categoryPost->slug_post) }}">{{ $categoryPost->title }}</a>
                                    <p>{{ str_limit(strip_tags($categoryPost->body), 300) }}</p>
                                </div>
                                <a href="{{ url('blog', $categoryPost->slug_post) }}" class="read-more">Read More</a>
                                <div class="clearfix"> </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 blog-top-right-grid">
                    @include('pages.blog.blog_search')
                    @include('pages.blog.blog_categories')
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //container -->
    </div>
@endsection