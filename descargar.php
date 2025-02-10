<?php 
include('../../app/config/config.php');

$fechaInit = date("Y-m-d", strtotime($_GET['f_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_GET['f_fin']));
$producto = $_GET['producto'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if($producto === 'todas') {
        $sqlSolicitudes = $pdo->prepare("SELECT * FROM tb_ventas WHERE (fecha_venta BETWEEN ('$fechaInit') AND ('$fechaFin'))");
    } else {
        $sqlSolicitudes = $pdo->prepare("SELECT * FROM tb_ventas WHERE (fecha_venta BETWEEN ('$fechaInit') AND ('$fechaFin')) AND producto = '$producto'");
    }
    $sqlSolicitudes->execute();
    $total = $sqlSolicitudes->rowCount();
    ?>
    <?php
                                        if ($producto !== 'todas') {
                                        ?>
    <div style="display:flex; justify-content: center">
        <h3 style="text-align: center; font-family: Arial, sans-serif; color: #333; font-size: 24px;"><?php echo $producto; ?> </h3>
    </div>

    <?php
                                        } else {
                                        ?>
    <div style="display:flex; justify-content: center">
        <h3 style="text-align: center; font-family: Arial, sans-serif; color: #333; font-size: 24px;">Todos los productos</h3>
    </div>
    <?php
                                        }
                                        ?>

    <h4>Reporte de
        <?php echo $fechaInit; ?> a <?php echo $fechaFin; ?>
        <!-- de <?php echo $producto; ?> -->
    </h4><br>
    <?php echo '<strong>Total: </strong> ('. $total .')';?>

    <table
        style="width: 100%; border-collapse: collapse; margin-top: 20px; font-family: Arial, sans-serif; font-size: 16px; color: #333;">
        <thead>
            <tr>
                <th
                    style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; border: 1px solid #ddd;">
                    Producto</th>
                <th
                    style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; border: 1px solid #ddd;">
                    Fecha</th>
                <th
                    style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; border: 1px solid #ddd;">
                    Vendedor</th>
                <th
                    style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; border: 1px solid #ddd;">
                    Cliente</th>
                <th
                    style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; border: 1px solid #ddd;">
                    Cantidad</th>
                <th
                    style="background-color: #4CAF50; color: white; padding: 10px; text-align: center; border: 1px solid #ddd;">
                    Precio Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $usuarios = $sqlSolicitudes->fetchAll(PDO::FETCH_ASSOC);
            foreach ($usuarios as $usuario) {
            ?>
            <tr style="background-color: #f2f2f2;">
                <td style="padding: 10px;"><?php echo $usuario['producto']; ?></td>
                <td style="padding: 10px;"><?php echo $usuario['fecha_venta']; ?></td>
                <td style="padding: 10px;"><?php echo $usuario['email_vendedor']; ?></td>
                <td style="padding: 10px;"><?php echo $usuario['email_cliente']; ?></td>
                <td style="padding: 10px;"><?php echo $usuario['cantidad']; ?></td>
                <td style="padding: 10px;"><?php echo $usuario['precio_total']; ?></td>
            </tr>
            <?php } ?>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd; text-align: center;" colspan="5">Total:</td>
                <td
                    style="padding: 10px; border: 1px solid #ddd; text-align: center; background: red;color: white;font-weight: bold;">
                    <?php 
                    $totalPrecio = array_sum(array_column($usuarios, 'precio_total'));
                    echo $totalPrecio. ' Bs';
                ?>
                </td>

            </tr>
        </tbody>
    </table>

</body>

</html>
<?php
$html=ob_get_clean();
//echo $html;

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf =new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled'=>true));
$dompdf->setOptions($options);

$dompdf->loadHtml("$html");

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream('archivo_pdf',array("Attachhment"=>false));
?>