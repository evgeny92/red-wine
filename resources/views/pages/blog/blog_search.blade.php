<div class="search">
    {!! Form::open(['url' => 'search', 'method' => 'get']) !!}
        {{ Form::text('search', null,  ['placeholder'=> 'Search', 'required' => '']) }}
        {{ Form::button('<span class="glyphicon glyphicon-search"></span>',['type'=>'submit']) }}
    {!! Form::close() !!}
</div>