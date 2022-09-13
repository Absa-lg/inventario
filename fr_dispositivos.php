<?php
require_once("conexion.php");

 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nuevo Servidor</title>
        
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/all.js" crossorigin="anonymous"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Bienvenido</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <?php
		        include "menu.php";
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <!-- Breadcrumbs-->

                        <div class="row">
                            <div class="col-md-12">
                            <div class="container">
                                <div class="card mx-auto mt-2">
                                <div class="card-header">Nuevo Registro</div>
                                <div class="card-body">
                                    <form method="post" action="controlador/rg_servidor.php" name="fcontacto">
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label for="sistema">Sistema:</label>
                                                    <input class="form-control" id="sistema" name="sistema" type="text" aria-describedby="nameHelp" placeholder="Sistema" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="hostname">Hostname:</label>
                                                    <input class="form-control" id="hostname" name="hostname" type="text" aria-describedby="nameHelp" placeholder="Hostname" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="ip">IP:</label>
                                                    <input class="form-control" id="ip" name="ip" type="text" aria-describedby="nameHelp" placeholder="Direccion IP" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <label for="usuario">Usuario:</label>
                                                    <input class="form-control" id="usuario" name="usuario" type="text" aria-describedby="nameHelp" placeholder="Usuario" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="contrasenia">Contraseña:</label>
                                                    <input class="form-control" id="contrasenia" name="contrasenia" type="text" aria-describedby="nameHelp" placeholder="********" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="udn">UDN:</label>
                                                    <select class="form-control" name="udn" id="udn">
                                                        <?php 
                                                            echo"<option value=''>Selecciona la UDN</option>";
                                                                $sql="SELECT idUDN, unegocio FROM udn"; 
                                                                $result=mysqli_query($conexion, $sql); 										
                                                                    while ($combo=mysqli_fetch_row($result)) {  
                                                                        echo "<option value=".$combo[0].">".$combo[1]."</option>\n"; 
                                                                    } 
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <input type="submit" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-block" value="Registrar">
                                                    <!-- Logout Modal-->
                                                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">¿Deseas añadir el registro?</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body"></div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                                                                <a class="btn btn-primary" type="submit">Si</a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <!-- Fin Modal -->
                                                </div>
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4"></div>
                                            </div>
                                        </div> 
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>


                    
                </main>
                


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/simple-datatables.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

        <!-- Bootstrap core JavaScript Modal-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->

</html>
