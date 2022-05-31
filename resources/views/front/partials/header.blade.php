<header class="site-header">
    <div id="main-header" class="main-header header-sticky">
        <div class="inner-header container clearfix">
            <div class="logo">
                <a href={{ route("/") }}><img src={{ asset("images/logo.png") }} alt=""></a>
            </div>
            <div class="header-right-toggle pull-right hidden-md hidden-lg">
                <a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
            </div>
            <div class="header-info hidden-sm hidden-xs">
                <ul>
                    <li><i class="fa fa-phone"></i>+49 233 322 333</li>
                    <li><i class="fa fa-envelope-o"></i>your@website.com</li>
                    <li class="language">
                    <p><i class="fa fa-globe"></i>English</p>
                    </li>
                    @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            @else                        
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endauth
                    @endif
                </ul>
            </div>
            <nav class="main-navigation text-left hidden-xs hidden-sm">
                <ul>
                    <li><a href="{{ route('/') }}" class="has-submenu">Home</a></li>
                    <li><a href="{{ route('courses') }}" class="has-submenu">Courses</a></li>
                    <li><a href="{{ route('events') }}" class="has-submenu">Events</a></li>
                    <li><a href="{{ route('teachers') }}" class="has-submenu">Teachers</a> </li>
                    <li><a href="{{ route('news') }}" class="has-submenu">News</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="#search"><i class="fa fa-search"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary"><span>Search</span></button>
    </form>
</div>