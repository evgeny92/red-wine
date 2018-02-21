<div class="banner">
    <!-- header -->
    <div class="header">
        <!-- container -->
        <div class="container">
            <div class="logo">
                <h1><a href="{{ url('/') }}">Red <span>Wine</span></a></h1>
            </div>
            <div class="top-nav">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">Menu
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                            <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="/about">About</a></li>
                            <li><a class="{{ Request::is('gallery') ? 'active' : '' }}" href="/gallery">Gallery</a></li>
                            <li><a class="{{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a></li>
                            <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //header -->

    @if(Request::is('/'))
    <!-- banner-grids -->
        <div class="banner-grids">
            <!-- container -->
            <div class="container">
                <div class="banner-top-grids">
                    <div class="top-grids">
                        <div class="col-md-6 banner-grid">
                            <div class="banner-left-grid blue">
                                <div class="banner-left-icon">
                                    <div class="services-icon">
                                        <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="banner-grid-info">
                                    <h3>Consectetur</h3>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit
                                        neque erat iaculis faucibus laoreet nec
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 banner-grid">
                            <div class="banner-left-grid green">
                                <div class="banner-left-icon">
                                    <div class="services-icon">
                                        <span class="glyphicon glyphicon-glass glyphicon-cog" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="banner-grid-info">
                                    <h3>Faucibus</h3>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipiscing elit
                                        neque erat iaculis faucibus laoreet nec
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- //container -->
        </div>
        <!-- //banner-grids -->
@endif


</div>
