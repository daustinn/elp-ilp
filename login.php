<?php include 'components/head.php' ?>

<body class="login-page">
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="vendors/images/login-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Inicar sesión</h2>
                        </div>
                        <?php
                        include "modelo/conexion.php";
                        include "controlador/controlador_login.php";
                        ?>
                        <form method="post" action="">
                            <div class="input-group custom">
                                <input id="usuario" type="text" class="form-control form-control-lg" name="usuario" placeholder="Usuario" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>

                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" name="contraseña" placeholder="Contraseña" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <input name="btningresar" type="submit" class="btn btn-primary bg-blue-700 btn-lg btn-block" value="Entrar" />
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>