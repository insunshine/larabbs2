<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}">LaraBBS2</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- 左侧导航栏-->
            <ul class="nav navbar-nav">

            </ul>
            <!-- 右侧导航栏-->
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">登录</a> </li>
                    <li><a href="{{ route('register') }}">注册</a> </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>