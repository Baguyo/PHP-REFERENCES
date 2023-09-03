<?php 
    abstract class Animal{
        abstract function makeSound();
    }

    class Dog extends Animal{
        public function makeSound()
        {
            echo "Rawr" . PHP_EOL;
        }
    }

    class Cat extends Animal{
        public function makeSound()
        {
            echo "meow". PHP_EOL;
        }
    }

    $dog = new Dog();
    $dog->makeSound();
    
    $cat = new Cat();
    $cat->makeSound();
?>