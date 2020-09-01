<?php
//CREACION DE CLASE Y CONSTRUCTOR
/*

    Poseo una clase con propiedades publicas y privadas,
    las publicas son establecidas despues de la instancia
    mientras que las privadas ya son establecidas.
    

    EJEMPLO:
                class Persona{
                    private $_nombre = "Manuel";
                    public $_apellido;
                    private $_direccion;
                    public function imprimir(){
                        echo $this->_nombre.' '.$this->_apellido;
                    }
                }
*/


//CREACION DE UN CONSTRUCTOR
//Se ejecuta una vez instanciado 
/*
    
    El constructor siempre es una funcion y siempre posee ese nombre.


    EJEMPLO:           
                class Persona{
                    private $_nombre = "Juan";
                    public $_apellido;
                    public function __construct(){
                        echo $this->_nombre;
                    }
                }

*/


//CREACION DE UN COSNTRUCTOR LLAMANDO UN METODO
/*

    Mi constructor esta haciendo el llamado de una funcion cuyo parametro
    es de tipo publico y esta siendo declarado en la funcion Imprimir,


    EJEMPLO:
                class Persona{
                    private $_nombre = "Juan";
                    public $_apellido;
                    public function __construct(){
                        //Primera version.- con la pseudo varible This.
                        $this->imprimir('carrion');
                        //Segunda version.- con la metodo self.
                        // self::imprimir('cervantes');
                    }
                    public function imprimir($var){
                        $this->_apellido = $var;
                        echo 'Hola '.$this->_nombre.' me apellido '.$this->_apellido;
                    }
                }
*/

//METODO SET Y GET 
class Persona{
    private $_nombre;
    private $_apellido;
    public function __construct(){
         self::imprimir();
    }
    public function setNombre($var){
        $this->_nombre = $var;
    }
    public function getNombre(){
        return $this->_nombre;
    }
    public function setApellido($var2){
        $this->_apellido = $var2;
    }
    public function getApellido(){
        return  $this->_apellido;
    }
    public function imprimir(){
        self::setNombre('Manuel');
        self::setApellido('Cristobal');
        echo 'Hola Constructor '.$this->getNombre().' me apellido: '.$this->getApellido();
    }
}