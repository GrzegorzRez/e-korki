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
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
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
            @endauth
            
            
        </header>
        <div class="container">
        @yield('content')
        </div>
        <footer class="footer">
        </footer>
    </body>
    <script src="js/app.js"></script>
</html>