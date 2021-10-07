<?php
    class Vehiculo{

        public $motor = false;
        public $mark;
        public $color; 

        public function status(){

            if($this->motor){
                echo "El motor está encendido <br>";
            } else {
                echo "El motor está apagado <br>";
            }
        }

        public function turn_on(){

            if($this->motor){
                echo "Cuidado, el motor está prendido <br>";
            } else {
                echo "El motor ahora está encendido <br>";
                $this->motor = true;
            }
        }
    }

    class Motorcycle extends Vehiculo{
        
        public function status_motorcycle(){
            $this->status();
        }
    }

    class Quad_bike extends Motorcycle {

    }

    $quad_bike = new Quad_bike();
    $quad_bike->status();

?>