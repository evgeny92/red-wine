<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('admin') }}">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <p>Username: {{ Auth::user()->name }} <b class="caret"></b></p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('admin/name') }}">Change Name</a></li>
                        <li><a href="{{ url('admin/email') }}">Change E-mail</a></li>
                        <li><a href="{{ url('admin/password') }}">Change Password</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <p>Log out</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                <li class="separator hidden-lg"></li>
            </ul>
        </div>
    </div>
</nav>