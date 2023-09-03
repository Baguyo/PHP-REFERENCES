<?php 
    class Student{
        private $id;
        private $name;
        private $class;

        public function set_id($id){
            $this->id = $id;
        }
        public function set_name($name){
            $this->name = $name;
        }
        public function set_class($class){
            $this->class = $class;
        }

        public function get_id():int{
            return $this->id;
        }
        public function get_name():string{
            return $this->name;
        }
        public function get_class():string{
            return $this->class;
        }
        
    }
?>