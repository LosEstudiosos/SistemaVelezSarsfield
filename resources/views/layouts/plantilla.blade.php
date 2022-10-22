<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- v--Estilos--v -->
    <link href="/css/tailwind.min.css" rel="stylesheet"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/all.css" rel="stylesheet"/>
    <link href="/css/font-awesome-animation.min.css" rel="stylesheet"/>
    <link href="/css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- ^--Estilos--^ -->

    <!-- v--JavaScripts--v -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- ^--JavaScripts--^ -->

    <!-- v--Favicon--v -->
    <link href="/img/icons/escudo.ico" rel="shortcut icon">
    <!-- ^--vFavicon--^ -->
   
</head>

<body class="bg-info">
    <div class="container-fluid">
        <div class="row r position-sticky top-0">
            <div class="col-6 d-flex align-self-center">
                <p class="text-white text-4xl">
                    <!-- header -->
                    @yield('header')
                </p>
            </div>
            <div class="col-6">
                <img class="d-flex ms-auto b border border-5 border-dark" src="/img/logo.png" alt="">
            </div>
        </div>
    </div>

    <!-- nav -->
    @yield('nav') 

    <!-- content -->
    <div class=" mt-3 ">
        @yield('content')
    </div>

    <!-- footer -->
    @yield('footer')
    
    <div class="text-dark justify-content-center text-center mt-4 pt-auto h5 font-weight-bold">
        © Grupo 2 - 2021<br/>
        Canet José Francisco<br/>
        Centurión Sebastián Ignacio<br/>
        Lapalma Alexander Santino<br/>
        Rodríguez Federico José
    </div>

    <!-- script -->
    @yield('script')
</body>
</html>