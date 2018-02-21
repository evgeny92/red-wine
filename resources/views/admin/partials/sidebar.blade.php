<div class="sidebar" data-color="purple" data-image="{{ asset('dashboard/img/sidebar-6.jpg') }}">
    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">Red Wine</a>
        </div>

        <ul class="nav">
            <li class="{{ Request::is('admin/posts') ? 'active' : '' }}"><a href="{{ url('admin/posts') }}"><i class="pe-7s-graph"></i><p>Posts</p></a></li>
            <li class="{{ Request::is('admin/categories') ? 'active' : '' }}"><a href="{{ url('admin/categories') }}"><i class="pe-7s-graph"></i><p>Categories</p></a></li>
            <li class="{{ Request::is('admin/gallery') ? 'active' : '' }}"><a href="{{ url('admin/gallery') }}"><i class="pe-7s-graph"></i><p>Gallery</p></a></li>
        </ul>
    </div>
</div>