@extends('layouts.main')

@section('title', '| Blog')

@section('content')
<!-- blog -->
<div class="blog">
    <!-- container -->
    <div class="container">
        <div class="blog-text">
            <h2>Our Blog</h2>
        </div>
        <div class="blog-top-grids">
            <div class="col-md-8 blog-top-left-grid">
                <div class="left-blog">
                    @if(count($posts) == 0 )
                        <div class="col-md-12">
                            <div class="error-template">
                                <h1><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Nothing Found</h1>
                                <div class="error-details">
                                    <p>Sorry, this post was not found.</p>
                                    <p>Please try again with some different keywords.</p>
                                </div>
                                <div class="error-actions">
                                    <a href="{{ url('blog') }}" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-share-alt"></span> Recent Posts</a>
                                </div>
                            </div>
                        </div>
                    @else
                    @foreach($posts as $post)
                        <div class="blog-left">
                        <div class="blog-left-left">
                            <p>
                                <b>Published on</b> {{ $post->created_at->format('F d, Y') }} / <b>Category</b>
                                <a href="{{ url('blog/category', $post->category->slug_cat) }}"> {{ $post->category->name }}</a>
                            </p>
                            <a href="#"><img src="{{ asset('images/posts/'. $post->image) }}" alt="" /></a>
                        </div>
                        <div class="blog-left-right">
                            <a href="{{ url('blog', $post->slug_post) }}">{{ $post->title }}</a>
                            <p>{{ str_limit(strip_tags($post->body), 300) }}</p>
                        </div>
                        <a href="{{ url('blog', $post->slug_post) }}" class="read-more">Read More</a>
                        <div class="clearfix"> </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                {{ $posts->appends(Request::only('search'))->links() }}
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
<!-- //blog -->
@stop