<?php 

    class Loteria{

        public $number;
        public $attempts;
        public $result = false;

        public function __construct($number, $attempts){

            $this->number = $number;
            $this->attempts = $attempts;
        }

        public function release(){

            $minimum = $this->number / 2;
            $maximum = $this->number * 2;

            for ($i=0; $i < $this->attempts; $i++) { 
                $attempts = rand($minimum,$maximum);
                self::attempts($attempts);
            }

        }

        public function attempts($attempts){
            
            if($attempts == $this->number){
                echo "<br> <b>".$attempts." == ".$this->number."</b> <br>";
                $this->result = true;
            } else {
                echo $attempts." != ".$this->number."<br>";
            }
        }

        public function __destruct(){

            if($this->result){
                echo "Felicidades, has acertado en ".$this->attempts." intentos";
            } else {
                echo "Que lastima, has perdido en ".$this->attempts." intentos";
            }
        }

    }

    $loteria = new Loteria(10,10);
    $loteria->release();

?>