<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>  @yield('title',env('APP_NAME')) </title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/mainLayout.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Kalam:400,700|Kaushan+Script" rel="stylesheet">
    @stack('styles')



</head>
<body>
<script src="/js/app.js"></script>
    <header>
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}"><img src="/images/logo.png" height="33px"/></a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">

                @auth
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('offers.add') }}">Ucz innych</a></li>
                    <li><a href="{{ route('offers.index') }}">Naucz się</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"> {{ Auth::user()->getFullName() }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile.index')  }}">Profil</a></li>
                            <li><a href="{{ route('messages.index') }}">Wiadomości</a></li>
                            <li><a href="{{ route('resources.index') }}">Materiały</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Wyloguj się
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endauth
                @guest
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('facebook.login') }}">Zaloguj przez Facebooka</a></li>
                    <li><a href="{{ route('register') }}">Rejestracja</a></li>
                    <li><a href="{{ route('login') }}">Logowanie</a></li>
                </ul>
                @endguest

            </div>
        </nav>
    </header>
    <div>
        @yield('content')
    </div>
    
    <footer class="footer-basic-centered">

            <p class="footer-company-motto">E-korki - Znajdź pomoc w nauce.</p>

            <p class="footer-links">
                <a href="{{ route('index') }}">Strona główna</a>
                |
                <a href="#">Reklama</a>
                |
                <a href="#">FAQ</a>
                |
                <a href="#">Kontakt</a>
            </p>

            <p class="footer-company-name">e-korki &copy; 2017</p>

        </footer>
</body>


</html>