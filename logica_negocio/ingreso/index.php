<?php include '../../layouts/header.php'; ?>

<?php include '../../layouts/headerStyle.php'; ?>

    <body class="fixed-left">

        <?php include '../../layouts/loader.php'; ?>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.php" class="logo logo-admin"><img src="../../public/assets/images/logo.png" height="30" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Bienvenido !</h4>
                        <p class="text-muted text-center">Iniciar Sesion</p>

                        <form class="form-horizontal m-t-30" id="formLogin">

                            <div class="form-group">
                                <label for="username">Correo o Usuario</label>
                                <input type="text" class="form-control" id="correo" name="correo" autocomplete="off" placeholder="Ingrese su correo o usuario">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena"  autocomplete="off" name="contrasena"  placeholder="Ingrese su contraseña">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Iniciar Sesion</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="#" class="text-muted"><i class="mdi mdi-lock"></i> ¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">Don't have an account ? <a href="pages-register.php" class="font-500 font-14 text-white font-secondary"> Signup Now </a> </p>
                <p class="text-white">© <?php echo date("Y",strtotime("-1 year")); ?> - <?php echo date("Y"); ?>  Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>

        <?php include '../../layouts/footerScript.php'; ?>

        <!-- App js -->
        <script src="../../public/assets/js/app.js"></script>

        <!-- Index js -->
        <script src="funciones_ingreso.js" type="text/javascript"></script>

    </body>
</html>