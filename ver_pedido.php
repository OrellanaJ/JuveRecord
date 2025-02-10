<?php
/**
 * Created by PhpStorm.
 * User: DELL-SYSTEM
 * Date: 24/07/2020
 * Time: 11:29
 */
include('../../app/config/config.php');

$id_pedido = $_GET['id_p'];
$email_m = $_GET['email_m'];

$costo_total = 0;

$query_pedidos = $pdo->prepare("SELECT * FROM tb_pedidos WHERE id_pedido = '$id_pedido' AND estado ='1' ");
$query_pedidos->execute();
$pedidos = $query_pedidos->fetchAll(PDO::FETCH_ASSOC);
foreach ($pedidos as $pedido) {
    $id_pedidos_p = $pedido['id_pedido'];
    $cliente = $pedido['nombre_cliente'];
    $ci_cliente = $pedido['ci_cliente'];
    $celular_cliente = $pedido['celular_cliente'];
    $celular_referencia_cliente = $pedido['celular_referencia_cliente'];
    $email_cliente = $pedido['email_cliente'];
    $direccion_cliente = $pedido['direccion_cliente'];
    $id_direccion_cliente = $pedido['id_direccion_cliente'];
    $costo_pedido = $pedido['costo_pedido'];
    $costo_emvio = $pedido['costo_emvio']; //se cambio costo_emvio
    $obs = $pedido['obs'];
    $id_carrito = $pedido['id_carrito'];
    $id_distribuidor_asignado =  //aqui se modifico id motoquero asignado a id distribuidor
    $estado_pedido = $pedido['estado_pedido'];
    $latitud = $pedido['latitud'];
    $longitud = $pedido['longitud'];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('../../layout/head.php');?>
    <title>San_Antonio_Movil</title>
</head>

<body>
    <br>
    <div class="container">
        <div class="">
            <h5>
                <i class="fa fa-user" style="color: #00558F"></i>
                <b style="color: #00558F"> Datos del Cliente</b>
            </h5>
            <hr>
            <p>
                <b>Cliente:</b> <?php echo $cliente;?> <br>
                <b>CI / NIT:</b> <?php echo $ci_cliente;?> <br>
                <b>Celular:</b> <?php echo $celular_cliente;?> <br>
                <!-- <b>Cel. de referencia:</b> <?php echo $celular_referencia_cliente;?> <br> -->
                <b>Email del Cliente:</b> <?php echo $email_cliente;?> <br>
                <hr>
            <h5>
                <i class="fa fa-map-marked-alt" style="color: #00558F"></i>
                <b style="color: #00558F"> Dirección de Entrega</b>
            </h5>
            <hr>
            <?php
            if($id_direccion_cliente == ""){
                echo "<b>Dirección del Cliente:</b>".$direccion_cliente."<br>";
            }else{
                $query_dires = $pdo->prepare("SELECT * FROM tb_direcciones WHERE id='$id_direccion_cliente'");
                $query_dires->execute();
                $dires = $query_dires->fetchAll(PDO::FETCH_ASSOC);
                foreach ($dires as $dire) {
                    $nombre_direccion = $dire['zona'];
                    $direccion = $dire['calle'];
                    $referencia = $dire['referencia'];
                }
                ?>
            <b><?php echo $nombre_direccion;?></b>
            <br>
            <span><?php echo $direccion;?></span><br>
            <span style="color: #7b0861"><b>Referencia: </b><?php echo $referencia;?></span>
            <?php
            }
            ?>
            <?php
            if($latitud == "" ){

                $query_diress = $pdo->prepare("SELECT * FROM tb_direcciones WHERE email='$email_cliente'");
                $query_diress->execute();
                $diresw = $query_diress->fetchAll(PDO::FETCH_ASSOC);
                foreach ($diresw as $direw) {
                    $latitud = $direw['longitud'];
                    $longitud = $direw['latitud'];
                }
                ?>
            <input type="hidden" value="<?php echo $latitud;?>" id="latitud">
            <input type="hidden" value="<?php echo $longitud;?>" id="longitud">

            <div class="row">
                <div class="col-md-12">
                    <div id="mapa" style="width: 100%; height: 500px;"></div>
                </div>
            </div>

            <script>
            function iniciarMapa() {
                var latitud = document.getElementById('longitud').value;
                var longitud = document.getElementById('latitud').value;

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
                    draggable: false,
                    position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng),
                    icon: "./shop-solid.svg"
                });

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        ({
                            coords: {
                                latitude,
                                longitude
                            }
                        }) => {
                            const coords = {
                                lat: latitude,
                                lng: longitude,
                            };
                            marcador = new google.maps.Marker({
                                map: mapa,
                                draggable: false,
                                position: new google.maps.LatLng(coords.lat, coords.lng),
                                icon: "./position.svg",
                            });
                            // generarMapa(coords);
                            verCoordenadas(coords, coordenadas, mapa)
                        },
                        () => {
                            alert(
                                "Tu navegador esta bien, pero ocurrio un error al obtener tu ubicación"
                            );
                        }
                    );
                } else {
                    alert("Tu navegador no cuenta con localizacion ");
                }

            }

            function verCoordenadas(inicio, final, mapa) {
                var directionsDisplay = new google.maps.DirectionsRenderer({
                    polylineOptions: {
                        strokeColor: '#2E9AFE'
                    }
                });
                var directionsService = new google.maps.DirectionsService();
                console.log(inicio)
                console.log(final)
                    var start = new google.maps.LatLng(inicio.lat, inicio.lng);
                    var end = new google.maps.LatLng(-17.40633404504375, -66.03911325891939);
                    var request = {
                        origin: start,
                        destination: end,
                        travelMode: google.maps.TravelMode.DRIVING
                    };
                    directionsService.route(request, function(response, status) {

                        directionsDisplay.setDirections(response);
                        directionsDisplay.setMap(mapa);
                        directionsDisplay.setOptions({
                            suppressMarkers: false
                        });

                    });
            }
            </script>

            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0VTNda_a3vnGdnKZ9IahKiOgMyQ2KMJU&callback=iniciarMapa">
            </script>


            <?php



            }else{
                ?>
            <input type="hidden" value="<?php echo $latitud;?>" id="latitud">
            <input type="hidden" value="<?php echo $longitud;?>" id="longitud">

            <div class="row">
                <div class="col-md-12">
                    <div id="mapa" style="width: 100%; height: 500px;"></div>
                </div>
            </div>

            <script>
            function iniciarMapa() {
                var latitud = document.getElementById('longitud').value;
                var longitud = document.getElementById('latitud').value;

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
                    draggable: false,
                    position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng),
                    icon: "./shop-solid.svg"
                });

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        ({
                            coords: {
                                latitude,
                                longitude
                            }
                        }) => {
                            const coords = {
                                lat: latitude,
                                lng: longitude,
                            };
                            marcador = new google.maps.Marker({
                                map: mapa,
                                draggable: false,
                                position: new google.maps.LatLng(coords.lat, coords.lng),
                                icon: "./position.svg",
                            });
                            // generarMapa(coords);
                            verCoordenadas(coords, coordenadas, mapa)
                        },
                        () => {
                            alert(
                                "Tu navegador esta bien, pero ocurrio un error al obtener tu ubicación"
                            );
                        }
                    );
                } else {
                    alert("Tu navegador no cuenta con localizacion ");
                }

            }

            function verCoordenadas(inicio, final, mapa) {
                var directionsDisplay = new google.maps.DirectionsRenderer({
                    polylineOptions: {
                        strokeColor: '#2E9AFE'
                    }
                });
                var directionsService = new google.maps.DirectionsService();
                console.log(inicio)
                console.log(final)
                    var start = new google.maps.LatLng(inicio.lat, inicio.lng);
                    var end = new google.maps.LatLng(-17.40633404504375, -66.03911325891939);
                    var request = {
                        origin: start,
                        destination: end,
                        travelMode: google.maps.TravelMode.DRIVING
                    };
                    directionsService.route(request, function(response, status) {

                        directionsDisplay.setDirections(response);
                        directionsDisplay.setMap(mapa);
                        directionsDisplay.setOptions({
                            suppressMarkers: false
                        });

                    });
            }
            </script>

            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0VTNda_a3vnGdnKZ9IahKiOgMyQ2KMJU&callback=iniciarMapa">
            </script>


            <?php
            }
            ?>

            <hr>
            <h5>
                <i class="fa fa-map-marked-alt" style="color: #00558F"></i>
                <b style="color: #00558F"> Carrito de Pedido</b>
            </h5>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-xs table-condensed" style="font-size: 12px">
                    <th style="background: #c0c0c0">N°</th>
                    <th style="background: #c0c0c0">Producto</th>
                    <th style="background: #c0c0c0">Detalle</th>
                    <th style="background: #c0c0c0">Cantidad</th>
                    <th style="background: #c0c0c0">Precio Unitario</th>
                    <th style="background: #c0c0c0">Precio Total</th>
                    <?php
                $contador_del_carrito = 0;
                $contador_de_cantidades = 0;
                $contador_de_precio_u = 0;
                $contador_de_precio_t = 0;
                $query_carrito = $pdo->prepare("SELECT * FROM tb_carrito WHERE id_pedido = '$id_pedido'");
                $query_carrito->execute();
                $carritos = $query_carrito->fetchAll(PDO::FETCH_ASSOC);
                foreach ($carritos as $carrito) {
                    $id_carrito = $carrito['id'];
                    $id_pedido = $carrito['id_pedido'];
                    $producto = $carrito['producto'];
                    $detalle = $carrito['detalle'];
                    $cantidad = $carrito['cantidad'];
                    $precio_u = $carrito['precio_unitario'];
                    $precio_t = $carrito['precio_total'];
                    $contador_del_carrito = $contador_del_carrito + 1;
                    $contador_de_cantidades = $contador_de_cantidades + $cantidad;
                    $contador_de_precio_u = $contador_de_precio_u + $precio_u;
                    $contador_de_precio_t = $contador_de_precio_t + $precio_t;
                    ?>
                    <tr>
                        <td>
                            <center><?php echo $contador_del_carrito;?></center>
                        </td>
                        <td><?php echo $producto;?></td>
                        <td><?php echo $detalle;?></td>
                        <td>
                            <center><?php echo $cantidad;?></center>
                        </td>
                        <td>
                            <center><?php echo $precio_u;?></center>
                        </td>
                        <td>
                            <center><?php echo $precio_t;?></center>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                    <tr>
                        <td colspan="3" align="right" style="background: #c0c0c0"><b>Totales</b></td>
                        <td align="right" style="background: #c0c0c0"><b>
                                <center><?php echo $contador_de_cantidades;?></center>
                            </b></td>
                        <td align="right" style="background: #c0c0c0"><b>
                                <center><?php echo $contador_de_precio_u;?></center>
                            </b></td>
                        <td align="right" style="background: #c0c0c0"><b>
                                <center><?php echo $contador_de_precio_t;?></center>
                            </b></td>
                    </tr>
                </table>
            </div>
            <br>
            <span>
                <i class="fa fa-money-bill" style="color: #00558F"></i>
                <b style="color: #00558F">Costo de Entrega: <span style="font-size: 25px">Bs.
                        <?php echo $costo_pedido;?></span></b>
            </span>
            <br>
            <span>
                <i class="fa fa-truck" style="color: #00558F"></i>
                <b style="color: #00558F">Costo de Entrega: <span style="font-size: 25px">Bs.
                        <?php echo $costo_emvio;?></span></b>
            </span>
            <hr>
            <!-- se modifico  costo_emvio -->
            <span>
                <b style="color: #00558F">Costo Total: <span style="font-size: 25px">Bs.
                        <?php echo $costo_total = $costo_pedido + $costo_emvio;?></span></b>
            </span>
            <br><br>
            <?php
        if($obs == ""){

        }else{
            ?>
            <span>
                <b>Observación. </b><?php echo $obs;?>
            </span><br>
            <?php
        }
        ?>

            <br>

            <?php
        if($estado_pedido == "ASIGNADO"){ ?>
            <a href="controller_tomar_pedido.php?id_p=<?php echo $id_pedidos_p;?>&&email_m=<?php echo $email_m;?>"
                class="btn btn-primary btn-block btn-lg">
                <i class="fa fa-truck"></i> TOMAR PEDIDO
            </a>
            <?php
        }
        if($estado_pedido == "PEDIDO TOMADO"){ ?>
            <a href="controller_finalizar_pedido.php?id_p=<?php echo $id_pedidos_p;?>&&email_m=<?php echo $email_m;?>&&email_c=<?php echo $email_cliente;?>"
                class="btn btn-danger btn-block btn-lg">
                <i class="fa fa-truck"></i> FINALIZAR PEDIDO
            </a>
            <?php
        }
        ?>


            <br><br>

            </p>
        </div>
    </div>
</body>
<?php include('../../layout/footer_link.php');?>

</html>