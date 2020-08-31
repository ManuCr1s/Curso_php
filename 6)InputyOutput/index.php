<?php
//Funciones de Impresion
    //PRINT.- Print no es necesariamente una funcion sino un constructor,
            //ya que no es necesario poner los parentesis y siempre nos
            //devuelve un true o uno.
                    if(print "Hola Mundo"){
                        $uno=1;
                        echo $uno;
                    }

    //PRINT_R.- Tiene similar aplicacion que el print pero nos permite, 
                //trabajar con los arregglos
                    $arreglo=[1,2,3];
                    print_r($arreglo);

    //ECHO.- Nos permite imprimir cadenas de texto conjuntamente con variables.
            //VERSIION 1.- Con comillas dobles, demora un poco más ya que busca
                            //a la variable.
                        $nombre="Manuel";
                        echo "<br> Hola $nombre";
            //VERSION 2.- Con comillas simples no imprime el valor de la variable
                            //sino el nombre de dicha variable.
                        $apellido="Cristobal";
                        echo '<br> hola: '.$apellido;

//CREAR UN TXT CON PHP
/*
                    $archivo = 'datos.txt';
                    $fp = fopen($archivo,'w');
                    fputs($fp,'Hola Mundo');
                    fputs($fp,"\nmi nombre es: $nombre");
                    fputs($fp,"\nmi apeliido es: $apellido");
                    fclose($fp);
*/

//VALIDACION DEL TXT CON PHP
/*
                    $archivo = 'datos.txt';
                    if(is_writable($archivo)){
                        if(!$fp = fopen($archivo,'a')){
                            echo 'No se puedo abrir';
                            exit;
                        }
                        if(fputs($fp,"\nSoy el nuevo") === false){
                            echo 'Nose puedo agregar';
                            exit;
                        }
                        fclose($fp);
                    }else{
                        echo 'No es editable';
                    }
*/

//LECTURA DEL TXT.
                    $archivo = 'datos.txt';
                    $fp = fopen($archivo,'r');
                    while (($bufer = fgets($fp,4096)) !== false) {
                        echo $bufer.'<br>';
                    }
                    fclose($fp);