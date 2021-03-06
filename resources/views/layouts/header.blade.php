<!-- header -->
<div class="header">
    <div class="container">
        <div class="header-grid">
            <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                <ul>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                                href="mailto:info@example.com">@example.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
                    @if (Auth::check())
                        <li><i class="glyphicon glyphicon-user" aria-hidden="true"></i><a
                                    href="/">{{ Auth::user()->name }}</a>
                        </li>
                        <li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="/logout">Logout</a></li>
                    @else
                        <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="/login">Login</a></li>
                        <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="/register">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
                <ul class="social-icons">
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="g"></a></li>
                    <li><a href="#" class="instagram"></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>

        @include ('layouts.nav')

    </div>
</div>
<!-- //header -->