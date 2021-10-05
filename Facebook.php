<?php 
    class Facebook{

        public $full_name;
        public $age;
        private $pass;

        public function __construct($full_name, $age, $pass){
            $this->full_name = $full_name;
            $this->age = $age;
            $this->pass = $pass;
        }

        public function get_info()
        {
            $this->update_pass('987');
            echo "Nombre: ".$this->full_name."<br> Edad: ".$this->age." <br> Password: ".$this->pass;
        }

        private function update_pass($pass){
            $this->pass = $pass;
        }
    }

    $facebook = new Facebook("Alvaro Breton", 50, '123');
    $facebook->get_info();
?>