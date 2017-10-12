<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        
    </head>
    <body>
        <header>

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
                              <li><a href="#">Rejestracja</a></li>
                              <li><a href="#">Logowanie</a></li>
                            </ul>
               </div>

            </nav>
            
        </header>
        @yield('content')
        <footer>
            
        </footer>
    </body>
    <script src="js/app.js"></script>
</html>