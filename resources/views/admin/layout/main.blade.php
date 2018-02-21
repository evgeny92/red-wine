<!doctype html>
<html lang="en">
<head>
@include('admin.partials.header')
</head>
<body>

<div class="wrapper">

    @include('admin.partials.sidebar')

    <div class="main-panel">

        @include('admin.partials.nav')

        <div class="content">
            @yield('content')
        </div>

        @include('admin.partials.footer')

    </div>
</div>
@include('admin.partials.scripts')
@yield('scripts')
</body>
</html>