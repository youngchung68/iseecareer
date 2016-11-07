<!-- Header -->
<header id="header" class="alt">
    <h1><a href="{{ url('/') }}">ISEECAREER</a></h1>
    {{--<img src="{{ url('/images/logo.jpg') }}" alt=""  class="logocircle" width="80px">--}}
    <nav id="nav">
        <ul>
            <li class="special">
                <a href="#menu" class="menuToggle"><span>Menu</span></a>
                <div id="menu">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/employers') }}">Employers</a></li>
                        <li><a href="{{ url('/jobs') }}">Find a Job</a></li>

                        {{--<li><a href="#">Sign Up</a></li>--}}
                        {{--<li><a href="#">Log In</a></li>--}}
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>