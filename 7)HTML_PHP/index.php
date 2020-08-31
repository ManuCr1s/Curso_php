<!-- PARA ENVIAR Y RECIBIR DATOS EN EL MISMO SCRIPT-->
<?php
    if(isset($_POST['numero_1']) && isset($_POST['numero_2'])){
        $numero_1 = $_POST['numero_1'];
        $numero_2 = $_POST['numero_2'];
        $resultado = $numero_1 * $numero_2;
        echo $resultado;
    }
    $numero_uno = 15;
    $numero_dos = 20;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicacion</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="numero_1" id="numero_1" value="<?php echo $numero_uno?>">*
        <input type="text" name="numero_2" id="numero_2" value="<?php echo $numero_dos?>">
        <input type="submit" value="RESULTADO">
    </form>
</body>
</html>
<!--PARA REALIZAR UN COMBOX CON PHP-->
<select name="datos" id="datos">
    <option value="0">SELECCIONE</option>
    <?php
        for($i = 1;$i < 21; $i++){
    ?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php        
        }
    ?>
</select>