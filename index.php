<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN SISTEMA LABORATORIO</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plantilla/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="plantilla/dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="index.php" class="h1"><b>INICIAR SESI&Oacute;N</b></a>
                </div>

                <div class="card-body">
                    <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Ingrese usuario" id="txt_usuario">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                    </div>
                    <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Ingrese Password" id="txt_pass">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Recu??rdame
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block" onclick="Iniciar_Sesion()">Ingresar</button>
                            </div>
                            <!-- /.col -->
                    </div>
                    <p class="mb-1">
                        <a href="forgot-password.html">Olvid?? mi contrase??a</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="plantilla/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="plantilla/dist/js/adminlte.min.js"></script>
        <!-- Sweet Alert  -->
        <script src="utilitarios/sweetalert.js"></script>
        <!-- Custom JS -->
        <script src="js/usuario.js?rev=<?php echo time(); ?>"></script>
    </body>
</html>