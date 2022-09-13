<?php
require_once("conexion.php");

// session_start();
// if(!isset($_SESSION['usuario'])){
//   header("location:login.php");
// }

// $usuario = $_SESSION['usuario'];
//  $buscaUsuario="SELECT nombre, apellidoP, apellidoM FROM personal WHERE BINARY usuario='$usuario'";
//  $ejecutaQuery=mysqli_query($conexion, $buscaUsuario);
 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Bienvenido</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                </div>
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tabla Habitaciones</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Habitaciones</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Habitaciones Hotel Xcaret Arte
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Habitacion</th>
                                            <th>Tipo</th>
                                            <th>Tipo de Habitacion</th>
                                            <th>Casa</th>
                                            <th>Estatus</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Habitacion</th>
                                            <th>Tipo</th>
                                            <th>Tipo de Habitacion</th>
                                            <th>Casa</th>
                                            <th>Estatus</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $tabla = "SELECT room, rtype, roomtype, casa FROM habitaciones";
                                            $row=mysqli_query($conexion, $tabla);
                                            while($imprime=mysqli_fetch_assoc($row)){
                                        ?>
                                        <tr>
                                            <td><?php echo utf8_encode(utf8_decode($imprime['room'])); ?></td>
                                            <td><?php echo utf8_encode(utf8_decode($imprime['rtype'])); ?></td>
                                            <td><?php echo utf8_encode(utf8_decode($imprime['roomtype'])); ?></td>
                                            <td><?php echo utf8_encode(utf8_decode($imprime['casa'])); ?></td>
                                            <td><span class="badge bg-success">Hecho</span></td>
                                            <?php
                                            } ?>
                                        </tr>                                        
                                    </tbody>
                                </table>
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
    </body>
</html>