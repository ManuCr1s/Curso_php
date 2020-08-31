<?php
//ARREGLOS.- Los arreglos pueden almacenar multiples valores y de distinto tipo.
//DECLARACION DE ARREGLOS DE UN TIPO.
    //VERSION N°1 
        $arreglo=array(1, 2, 3, 4, 5);
    //VERSION N°2
        $arreglo2=["Lunes", "Martes","ala", "Miercoles"];

//DECLARACION DE ARREGLOS DE VARIOS TIPOS.
    //VERSION N°2
        $arreglo3=["Lunes",true,4,11.5,[1,2,3]];

//INDICES DE UN ARRAY.- Indica la posicion del elemento del array.
        $arreglo4=["a" => 1, "b" => 2, "c" => 3, "d" => 4];
        print_r($arreglo4);
        echo "<br>";

//AGREGAR UN NUEVO VALOR A UN ARRAY.
        $arreglo4[] = "UNO";
        $arreglo4[] = "DOS";
        $arreglo4[] = "TRES";
        print_r($arreglo4);
        echo "<br>";
//FUNCIONES DE ARRAY
sort($arreglo2);//Ordena de A a la Z pero difiere de minuscula a MAYUSCULA.
rsort($arreglo2);//Ordena de Z a la A pero difiere de minuscula a MAYUSCULA.
count($arreglo2);//Obtine la longitud del array.
in_array('Lunes',$arreglo2);//Devuelve true o false depende si encuentra el elemento en el array
array_search('Lunes',$arreglo2);//Devuelve el indice del elemento en el array.
print_r($arreglo2);