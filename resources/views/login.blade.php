<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="/SistemaVelezSarsfield/resources/css/bootstrap.min.css" rel="stylesheet" >
    <link href="/SistemaVelezSarsfield/resources/js/bootstrap.min.js" rel="stylesheet" >
    <link href="/SistemaVelezSarsfield/resources/css/style.css" rel="stylesheet">
    <!-- favicon -->
    <link href="/SistemaVelezSarsfield/resources/img/icons/escudo.ico" rel="shortcut icon">
    <!-- estilos -->
</head>
<body>
    <div class="container-fluid" style="background: rgba(42, 69, 165, 1);">
        <div class="row d-flex justify-content-center vh-100">
            <div  class="col-3 align-self-center card d-flex b border border-5 border-dark">
                <div class="text-center my-3">
                    <img src="/SistemaVelezSarsfield/resources/img/logo.png" alt="">
                </div>
                <div class="mb-4 card-title text-center border-button">
                    <h2 class="justify-content-center">Inicio de sesión</h2>
                </div>
                <form class="bg-secondary b border border-5" action="login.php" method="POST">
                    <div class="row justify-content-center">
                        <div class="my-4 col-12 d-flex justify-content-center">
                            <input class="border-3 b-i" type = "text" name="usuario" placeholder="Ingrese su usuario">
                        </div>
                        <div class="mb-4 col-12 d-flex justify-content-center">
                            <input class="border-3 b-i" type = "password" name="contraseña" placeholder='Ingrese su contraseña'>
                        </div>
                        <div class="mb-3 col-12 d-flex justify-content-center">
                            <button type="button" class="btn bt-r btn-info">Ingresar</button>    
                        </div>
                    </div>
                </form>
                <div class="row justify-content-center border-0">
                    <div class="col-12 text-center my-2">
                        <a href="#" class="link-primary">¿Olvidó su usuario y/o contraseña?</a>
                    </div>
                    <div class="col text-center mb-3">
                        <a href="#" class="link-primary">No tenés cuenta</a>
                    </div>
                </div>
            </div>
            <div class="col-12 align-self-start text-center">
                <a href="#" type="Button" class="text-white btn btn-link btn-lg m-0 bu ">Volver</a>
            </div>
            <div class="text-white d-flex justify-content-center text-center h5 font-weight-bold">
                © Grupo 2 - 2021<br/>
                Canet José Francisco<br/>
                Centurión Sebastián Ignacio<br/>
                Lapalma Alexander Santino<br/>
                Rodríguez Federico José
            </div>
        </div>
    </div>
</body>
</html>