<?php 
    interface Phone{
        function set_name($name);
        function turn_on_phone();
    }

    class Ios implements Phone{
        public $name;

        public function set_name($name){
            $this->name = $name;
        }

        public function turn_on_phone()
        {
            echo $this->name . " turning on";
        }

        
    }

    class Android implements Phone{
        public $name;

        public function set_name($name){
            $this->name = $name;
        }

        public function turn_on_phone()
        {
            echo $this->name . " turning on";
        }
    }
?>