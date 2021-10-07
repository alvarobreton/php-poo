<?php

    class Pagina{

        public $name = " Mi página Álvaro Bretón";
        public static $url = "www.alvarobreton.com";

        public function welcome(){
            echo "Bienvenidos a <b>".$this->name."</b> la página es <b>".self::$url."</b>";
        }

        public static function welcome_static(){
            echo "Bienvenido a ".$this->name;
        }
    }

    class Web extends Pagina{

    }
    Web::welcome_static();
?>