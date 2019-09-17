<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BurguerBeer -  @yield('title')</title>
        <link rel="stylesheet" href="/assets/css/app.css">
        <link rel="stylesheet" href="/assets/css/main.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img src="/assets/img/burguerbeer.png"  class="d-inline-block align-top" alt="">
                <span>Pedidos toda la noche!</span>
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>      
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/promos">Promos </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/carta">Carta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hamburguesas">Nuestras Guesas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tragos">Tragos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Nuestra historia</a>
                    </li>
                </ul>                
            </div>
        </nav>
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col-12">
                    <img src="/assets/img/icons/glovo-icon.png" />
                    <img src="/assets/img/icons/fb-icon.png" />
                    <img src="/assets/img/icons/ig-icon.png" />
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <p>Burguer Beer</p>
                </div>
            </div>
        </footer>
    </body>
    <script src="/assets/js/app.js"></script>
    @stack('scripts')
</html>