<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio_01</title>
</head>
<body>
        <form method="post" action="http://127.0.0.1/lab05/actividad01.php">
        valor 1:<br>   <Input type="text" name="valor1"><br>
        valor 1:<br>   <Input type="text" name="valor2"><br>
        
        <Input type="submit" name="Producto" value="Calcular">
        <Input type="reset" name="Cancelar" value="Cancelar">

        </form>
<?php
        $numero1 = $_POST['valor1'];
        $numero2 = $_POST['valor2'];
        $producto = $numero1 *$numero2;
        echo "El producto de la operacion es : ".$producto;
?>

</body>
</html>