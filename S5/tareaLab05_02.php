<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta de compra de gaseosas</title>
</head>
<body>
        <form method="post" action="http://127.0.0.1/lab05/tareaLab05_02.php">
        valor de la gaseosa :<br>   <Input type="text" name="valorGaseosa"><br>
        cantidad de gaseosas a llevar :<br>   <Input type="text" name="cantidad"><br>
        
        <Input type="submit" name="boletarpta" value="Calcular"> <br>

        Aqui se mostrara el importe de la compra :<br>
<?php
        $valorGaseosa = $_POST['valorGaseosa'];
        $cantidadGaseosa = $_POST['cantidad'];

        $nuevoPrecio = $valorGaseosa - ($valorGaseosa * 0.05);
        $importeCompra = $nuevoPrecio * $cantidadGaseosa;
        $importeDescuento = $importeCompra * 0.07;
        $importeTotal = $importeCompra + $importeDescuento;
        $totalCaramelos = $cantidadGaseosa * 2;
        
        echo "El nuevo precio de la gaseosa es de : ".$nuevoPrecio."<br>";
        echo "El importe de la compra de las gaseosas es de : ".$importeCompra."<br>";
        echo "El importa del descuento de la gaseosa sera de : ".$importeDescuento."<br>";
        echo "El importe total es de : ".$importeTotal." con un bono de ".$totalCaramelos." caramelos ;P";
?>
</body>
</html>