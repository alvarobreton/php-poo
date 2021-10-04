<?php

    class Persona{
        public $nombre = 'Pedro';


        public function hablar($mensaje){
            echo $mensaje;
        }
    }


    $persona =  new Persona();

    //echo $persona->nombre;
    $persona->hablar('Este es un saludo alvarobreton.com');

?>