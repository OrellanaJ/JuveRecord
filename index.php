<?php
include('../../app/config/config.php');

session_start();
if(isset($_SESSION['u_usuario'])) {
    $user = $_SESSION['u_usuario'];
    //echo "session de ".$user; ///////////para comprobar sesion

    $query = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = '$user' AND estado ='1'");
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        $id_usuario_s = $usuario['id'];
        $ap_paterno_s = $usuario['ap_paterno'];
        $ap_materno_s = $usuario['ap_materno'];
        $nombres_s = $usuario['nombres'];
        $ci_s = $usuario['ci'];
        $cargo_s = $usuario['cargo'];
        $foto_perfil_s = $usuario['foto_perfil'];
    }
    ?>

<!DOCTYPE html>
<html>

<head>
    <?php include('../../layout/head.php');?>
    <title>Rutas Distribucion</title>
    <style type="text/css">
    body {
        font: normal 10pt Helvetica, Arial;
    }

    #map {
        width: 100%;
        height: 500px;
        border: 0px;
        padding: 0px;
    }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include('../../layout/menu.php');?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="container">



                        <br><br><br>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title"><span class="fa fa-location-arrow"></span> Ver Localizacion de
                                    Distribuidores</h3>
                            </div> <!-- /.card-body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="latitud">Latitud</label>
                                                    <input type="text" id="latitud" class="form-control">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="longitud">Longitud</label>
                                                    <input type="text" id="longitud" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="mapa" style="width: 100%; height: 500px;"></div>
                                            </div>
                                        </div>

                                        <script>
                                        function iniciarMapa() {
                                            var latitud = -17.406661645815724;
                                            var longitud = -66.0456363912436;

                                            var coordenadas = {
                                                lng: longitud,
                                                lat: latitud
                                            };
                                            generarMapa(coordenadas);
                                        }

                                        function generarMapa(coordenadas) {
                                            var mapa = new google.maps.Map(document.getElementById('mapa'), {
                                                zoom: 12,
                                                center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
                                            });

                                            marcador = new google.maps.Marker({
                                                map: mapa,
                                                draggable: true,
                                                position: new google.maps.LatLng(coordenadas.lat, coordenadas
                                                    .lng)
                                            });

                                            marcador.addListener('dragend', function(event) {
                                                document.getElementById("latitud").value = this.getPosition()
                                                    .lat();
                                                document.getElementById("longitud").value = this.getPosition()
                                                    .lng();
                                            })

                                        }
                                        </script>

                                        <script
                                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0VTNda_a3vnGdnKZ9IahKiOgMyQ2KMJU&callback=iniciarMapa">
                                        </script>

                                    </div>
                                </div>
                            </div><!-- /.card-body -->
                        </div>



                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include('../../layout/footer.php');?>
    </div>
    <?php include('../../layout/footer_link.php');?>




</body>

</html>

<?php
}else{
    header("Location: $URL/login");
}
?>