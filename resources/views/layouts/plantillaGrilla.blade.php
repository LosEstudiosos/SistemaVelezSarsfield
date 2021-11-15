<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <!-- v--Estilos--v -->
    <link href="/SistemaVelezSarsfield/resources/css/tailwind.min.css" rel="stylesheet"/>
    <link href="/SistemaVelezSarsfield/resources/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/SistemaVelezSarsfield/resources/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <link href="/SistemaVelezSarsfield/resources/css/all.css" rel="stylesheet"/>
    <link href="/SistemaVelezSarsfield/resources/css/font-awesome-animation.min.css" rel="stylesheet"/>
    
        <!-- v--Extension Responsive--v -->
        <link href="/SistemaVelezSarsfield/resources/css/responsive.bootstrap5.min.css" rel="stylesheet"/>
        <!-- ^--Extension Responsive--^ -->
        
        <!-- v--Extension Impresiones--v -->
        <link href="/SistemaVelezSarsfield/resources/css/buttons.bootstrap5.min.css" rel="stylesheet"/>
        <!-- ^--Extension Impresiones--^ -->
        
        <!-- v--Extension Condiciones--v -->
        <link href="/SistemaVelezSarsfield/resources/css/searchBuilder.bootstrap5.min.css" rel="stylesheet"/>
        <link href="/SistemaVelezSarsfield/resources/css/dataTables.dateTime.min.css" rel="stylesheet"/>
        <!-- ^--Extension Condiciones--^ -->

    <link href="/SistemaVelezSarsfield/resources/css/style.css" rel="stylesheet"/>
    <!-- ^--Estilos--^ -->

    <!-- v--JavaScripts--v -->
    <script src="/SistemaVelezSarsfield/resources/js/bootstrap.min.js"></script>
    <script src="/SistemaVelezSarsfield/resources/js/jquery-3.5.1.js"></script>
    <script src="/SistemaVelezSarsfield/resources/js/jquery.dataTables.min.js"></script>
    <script src="/SistemaVelezSarsfield/resources/js/dataTables.bootstrap5.min.js"></script>
    <script src="/SistemaVelezSarsfield/resources/js/bootstrap.bundle.min.js"></script>

        <!-- v--Extension Responsive--v -->
        <script src="/SistemaVelezSarsfield/resources/js/dataTables.responsive.min.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/responsive.bootstrap5.min.js"></script>
        <!-- ^--Extension Responsive--^ -->
        
        <!-- v--Extension Impresiones--v -->
        <script src="/SistemaVelezSarsfield/resources/js/dataTables.buttons.min.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/buttons.bootstrap5.min.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/jszip.min.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/pdfmake.min.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/vfs_fonts.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/buttons.html5.min.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/buttons.print.min.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/buttons.colVis.min.js"></script>
        <!-- ^--Extension Impresiones--^ -->

        <!-- v--Extension Condiciones--v -->
        <script src="/SistemaVelezSarsfield/resources/js/dataTables.searchBuilder.min.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/searchBuilder.bootstrap5.min.js"></script>
        <script src="/SistemaVelezSarsfield/resources/js/dataTables.dateTime.min.js"></script>
        <!-- ^--Extension Condiciones--^ -->
        
    <script src="/SistemaVelezSarsfield/resources/js/script.js"></script>
    <!-- ^--JavaScripts--^ -->

    <!-- v--Favicon--v -->
    <link href="/SistemaVelezSarsfield/resources/img/icons/escudo.ico" rel="shortcut icon">
    <!-- ^--Favicon--^ -->
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
        <ul>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <table id="tabla" class="table table-striped align-middle table-bordered mt-auto table-sm text-center">
                            <thead>
                                <tr class="table-dark">
                                    @yield('table_head')
                                </tr>
                            </thead>
                            <tbody class="table-secondary">
                                @yield('table_body')
                            </tbody>
                        </table>
                    <div>
                <div>
            </div>
        </ul>    
    </div>
<footer>
    <!-- footer -->
    @yield('footer')
</footer>
    
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