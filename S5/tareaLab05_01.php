<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total de los sueldos</title>
</head>
<body>
    <form form method="post" action="http://127.0.0.1/lab05/tareaLab05_01.php">
        Inporte Total Vendido del Mes : <br>   <Input type="text" name="ventaMes"><br>
        cantidad de hijos : <br>   <Input type="text" name="n_Hijos"><br>
        <Input type="submit" name="calcular Sueldo" value="sueldo"> <br>

        Aqui se mostrara el calculo de su sueldo bruto y otros : <br>

    </form>
<?php
    $ventaXmes= $_POST['ventaMes'];
    $cantHijos= $_POST['n_Hijos'];
    $comision= $ventaXmes * 0.075;
    $bonificacion = $cantHijos * 50;
    $sueldoBruto = 600 + $comision;
    $descuento = $sueldoBruto * 0.11;
    $sueldoNeto= ($sueldoBruto + $bonificacion) - $descuento;

    echo "la comision da un total de : ".$comision."<br>";
    echo "la bonificacion por hijo sera de : ".$bonificacion."<br>";
    echo "el sueldo bruto sera de : ".$sueldoBruto."<br>";
    echo "el descuento ha aplicar sera de : ".$descuento."<br>";
    echo "el sueldo neto o sueldo a recibir sera de : ".$sueldoNeto."<br>";
?>

</body>
</html>