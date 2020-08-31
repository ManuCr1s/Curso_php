<?php
//BUCLES .- Se realiza una cantidad de ciclos segun la condicion.
/*
    TIPOS DE BUCLES:
        --WHILE.- Se realizan los ciclos mientras se cumpla la condicion.
        --DO WHILE.- Se realiza al menos un ciclo aun asi no se cumpla la condicion.
        --FOR.- Se realiza el ciclo mientras se cumpla la condicion y se va incrementando el contador.
*/
echo "<br><br><br><br><br>";
$filas=10;
$i=1;
while($i<=$filas){
    $texto="*";
    for($a=2;$a<=$i;$a++){
        $texto.="*";
    }
    echo $texto."<br>";
    $i++;
}
