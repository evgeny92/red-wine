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
                <div class="col-md-4 blog-top-right-grid">
                    <div class="comments">
                        {!! Form::open(['route' => 'search']) !!}
                        {{ Form::text('search', null,  ['placeholder'=> 'Search', 'required' => '']) }}
                        {{ Form::button('<span class="glyphicon glyphicon-search"></span>',['type'=>'submit']) }}
                        {!! Form::close() !!}
                        <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Title</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($searchPosts->count())
                                @foreach($searchPosts as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->title }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">There are no data.</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //container -->
    <!-- //blog -->
@stop