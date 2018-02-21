@extends('layouts.main')

@section('title', '| Single Post')

@section('content')

<div class="blog">
    <!-- container -->
    <div class="container">
        <div class="col-md-8 blog-top-left-grid">
            <div class="left-blog left-single">
                <div class="blog-left">
                    <div class="single-left-left">
                        <p> <b>Published on</b> {{ $post->created_at->format('F d, Y') }} / <a href="#disqus_thread"></a></p>
                        <img src="{{ asset('images/posts/'.$post->image) }}" alt="" />
                    </div>
                    <div class="blog-left-bottom">
                        <h3>{{ $post->title }}</h3>
                        <P>{!! $post->body !!}</P>
                    </div>
                </div>
                <div class="response">
                    <h3>Responses</h3>
                    <div id="disqus_thread"></div>
                    <script>
                        //DISQUS
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://http-red-wine.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>
        </div>
        <div class="col-md-4 blog-top-right-grid">
            @include('pages.blog.blog_categories')
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //container -->
</div>
<!-- //blog -->
@stop