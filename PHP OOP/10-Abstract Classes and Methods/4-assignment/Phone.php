<?php 
    
    abstract class Phone{

        protected $name;

        public  function set_nane($name){
            $this->name = $name;
        }
        abstract function turnOn();

    }

    class IOS extends Phone{

        public function turnOn()
        {
            echo $this->name . " turning on...";
        }
    }


    $iphone = new IOS();
    $iphone->set_nane("Apple 13 pro max");
    $iphone->turnOn();

 ?>