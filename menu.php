<?php
/**
 * Created by PhpStorm.
 * User: DELL-SYSTEM
 * Date: 14/07/2020
 * Time: 19:29
 */

 
// PARA INICIAR SESION CON VARIABLES PREDETERMINADOS

$nombres_s = isset($_SESSION['nombres_s']) ? $_SESSION['nombres_s'] : 'Usuario';
$ap_paterno_s = isset($_SESSION['ap_paterno_s']) ? $_SESSION['ap_paterno_s'] : '';
$ap_materno_s = isset($_SESSION['ap_materno_s']) ? $_SESSION['ap_materno_s'] : '';
$cargo_s = isset($_SESSION['cargo_s']) ? $_SESSION['cargo_s'] : 'ADMINISTRADOR'; // Valor administrador

?>
            <!-- ESTO PARA LA CABECERA SEA FIJA -->
<style>
        .content-wrapper {
            margin-top: 100px; /* Ajusta según la altura de la barra de navegación */
        }
    </style>

<nav class="main-header navbar navbar-expand fixed-top bg-secondary" style="border-radius: px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
    <ul class="navbar-nav">
        <li class="nav-item">
            <!-- <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>   -->
        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
   
    </ul>
    <span class="navbar-brand mx-auto" style="font-size: 20px; font-weight: bold; color: #FFFFFF;">
        <i class="fas fa-tint" style="margin-right: 8px;"></i> SISTEMA DE DISTRIBUCION DE AGUA SAN ANTONIO
    </span>
</nav>



<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>" class="brand-link">
         <img src="<?php echo $URL;?>/public/logoAgua.ico"
             alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: "> 
        <span class="brand-text font-white"> <b>SAN ANTONIO</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
                <img src="<?php //echo $URL."/public/imagenes/personal/".$foto_perfil;?>"
                     class="img-circle elevation-2" alt="User Image">
            </div> -->
            <div class="info" style="margin-top: -5px">
                <a href="#" class="d-block" style="color: #f3f3f3">USUARIO:
                    <br><?php echo $nombres_s." ".$ap_paterno_s." ".$ap_materno_s;?></a></br>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <?php
               if($cargo_s == "ADMINISTRADOR"){ ?>
                <li class="nav-item has-treeview">
                    <a href="<?php echo $URL;?>/web/usuarios/"
                        class="nav-link <?php echo $link == "usuarios" ? "active" : ""; ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            <b>USUARIOS</b>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $URL;?>/web/usuarios/" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p><b>Listado de Usuarios</b></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $URL;?>/web/usuarios/create.php" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p><b>Creación de Usuarios</b></p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- boton para creacion de distribuidores -->
                <li class="nav-item has-treeview">
                    <a href="<?php echo $URL;?>/web/distribuidores/"
                        class="nav-link <?php echo $link == "distribuidores" ? "active" : ""; ?>">
                        <i class="nav-icon fas fa fa-truck"></i>
                        <p>
                            <b>DISTRIBUIDORES</b>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $URL;?>/web/distribuidores/" class="nav-link">
                                <i class="nav-icon fas fa-truck"></i>
                                <p><b>Listado de Distribuidores</b></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $URL;?>/web/distribuidores/create.php" class="nav-link">
                                <i class="nav-icon fas fa-truck"></i>
                                <p><b>Creación de Distribuidores</b></p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="<?php echo $URL; ?>/web/clientes/create"
                        class="nav-link <?php echo $link == "clientes" ? "active" : ""; ?>">
                        <i class="nav-icon fas fa-user-tag"></i>
                        <p>
                            <b>CLIENTES</b>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $URL;?>/web/clientes/" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p><b>Listado de Clientes</b></p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $URL;?>/web/clientes/create.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p><b>Registrar nuevo cliente</b></p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="<?php echo $URL; ?>/web/clientes/create"
                        class="nav-link <?php echo $link == "clientes" ? "active" : ""; ?>">
                        <i class="nav-icon fas fa-water"></i>
                        <p>
                            <b>PRODUCTOS</b>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $URL;?>/web/productos/" class="nav-link">
                                <i class="nav-icon fas fa-water"></i>
                                <p><b>Listado de Productos</b></p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo $URL;?>/web/productos/create.php" class="nav-link">
                                <i class="nav-icon fas fa-water"></i>
                                <p><b>Registrar Nuevo Producto</b></p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- <li class="nav-item">
                    <a href="<?php echo $URL;?>/web/rutas_D"
                        class="nav-link <?php echo $link == "rutas-distribuicion" ? "active" : ""; ?>">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>
                            RUTAS DE DISTRIBUCION
                        </p>
                    </a>
                </li> -->



                <li class="nav-item">
                    <a href="<?php echo $URL;?>/web/pedidos"
                        class="nav-link <?php echo $link == "pedidos" ? "active" : ""; ?>">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            <b>PEDIDOS</b>
                        </p>
                    </a>
                </li>


                <li class="nav-header"><b>REPORTES</b></li>

                <li class="nav-item">
                    <a href="<?php echo $URL;?>/web/reportes" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p><b>REPORTES</b></p>
                    </a>
                </li>
                <?php
               }
               ?>

                <li class="nav-header"><b>CERRAR SESION</b></li>

                <li class="nav-item">
                    <a href="<?php echo $URL;?>/login/cerrarsesion.php" class="nav-link">
                        <i class="nav-icon fa fa-power-off"></i>
                        <p><b>SALIR</b></p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>