<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="/SistemaVelezSarsfield/resources/css/bootstrap.min.css" rel="stylesheet" >
    <link href="/SistemaVelezSarsfield/resources/js/bootstrap.min.js" rel="stylesheet" >
    <link href="/SistemaVelezSarsfield/resources/css/style.css" rel="stylesheet">
    <!-- favicon -->

    <!-- estilos -->

</head>

<body class="bg-info">
    <div class="container-fluid">
        <div class="row r position-sticky top-0">
            <div class="col-6 d-flex align-self-center">
                <h1 class="text-white">
                    <!-- header -->
                    @yield('header')
                </h1>
            </div>
            <div class="col-6">
                <img class="d-flex ms-auto b border border-5 border-dark" src="/SistemaVelezSarsfield/resources/img/logo.png" alt="">
            </div>
        </div>
    </div>

    <!-- nav -->
    @yield('nav') 

    <!-- content -->
    <div class="row justify-content-center mt-3 mx-0">
        @yield('content')
    </div>

    <!-- footer -->
    @yield('footer')
    
    <div class="text-dark justify-content-center text-center mt-auto pt-5 h5 font-weight-bold">
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