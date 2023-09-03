<?php

use Dog as GlobalDog;

    class Animal{

        private $name;
        private $is_hunting = false;

        function does_hunting(){
            return $this->is_hunting;
        }

        function __construct($name, $is_hunting)
        {
            $this->name = $name;
            $this->is_hunting = $is_hunting;
        }
    }

    class Dog extends Animal{

        function Make_sound(){
            if($this->is_hunting){
                echo "RAWR";
            }
        }

    }

    class Tiger extends Animal{
        function Make_sound(){
            if($this->is_hunting){
                echo "RAWR";
            }
        }
    }


    $dog1 = new Dog("mimi", true);
    $dog1->Make_sound();