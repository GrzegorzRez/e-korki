<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/profile.css">
    </head>
    <body>
        <header>
            @auth

    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class = "navbar-brand" href = "{{ route('index') }}">e-Korki</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Ucz innych</a></li>
                <li><a href="#">Naucz się</a></li>
                   
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                           
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">{{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                         <li><a href="#">Profil</a></li>
                        <li><a href="#">Wiadomości</a></li>
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
        </div>
    </nav>                
            @endauth
            @guest
            <nav class = "navbar navbar-default" role = "navigation">

               <div class = "navbar-header">
                  <button type = "button" class = "navbar-toggle" 
                     data-toggle = "collapse" data-target = "#example-navbar-collapse">
                     <span class = "sr-only">Toggle navigation</span>
                     <span class = "icon-bar"></span>
                     <span class = "icon-bar"></span>
                     <span class = "icon-bar"></span>
                  </button>

                  <a class = "navbar-brand" href = "{{ route('index') }}">e-Korki</a>
               </div>

               <div class = "collapse navbar-collapse" id = "example-navbar-collapse">


                  </ul>
                   <ul class="nav navbar-nav navbar-right">
                              <li><a href="{{ route('register') }}">Rejestracja</a></li>
                              <li><a href="{{ route('login') }}">Logowanie</a></li>
                            </ul>
               </div>

            </nav>   
            @endguest
            
            
        </header>
        <div class="container">
        @yield('content')
        </div>
        <footer class="footer">
        </footer>
    </body>
    <script src="js/app.js"></script>
</html>