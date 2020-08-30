<?php
/*CONDICIONALES*/
//IF.-Se ejecutara el codigo solo si se cumple la condicion.
    //VERSION 1: En una sola linea.
        if(10>8)echo "Es verdad";
    //VERSION 2: En varias lineas.
        if(10>8){
            echo "Si es verdad";
        }

//IF-ELSE.- Si se cumple la condicion se ejecuta la sentencia
            //sino la otra sentencia.
    if(10==20)echo "Esto es verdadero";else echo "Esto es falso";

//OPERADOR TERNARIO.- es igual al IF-ELSE    
    echo (10==10)?"Es verdad <br><br>":"Es falso";

//SWITCH.-Para multiples casos.}
    $numero=10;
    switch($numero){
        case 1:
            echo "El numero es 1";
        break;
        case 2:
        case 3:
        case 4:
            echo "El numero es mayo a 1";
        break;
        default:
            echo "Es un numero";
        break;
    }