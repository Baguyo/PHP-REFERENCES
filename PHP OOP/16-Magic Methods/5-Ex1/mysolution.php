<?php 
    class User{
        public $name = "emerson";


        function __set($name, $value)
        {
            echo "_set method has been called ";
            $this->$name = $value;
        }

        function __get($name)
        {   
            echo $this->$name;
        }

        function __toString()
        {
            return $this->name;
        }
        // function __debugInfo()
        // {
        //     echo $this->name;
        //     // return $user;
            
        // }
        
    }

    $user = new User();
    // $user->name = "baguyo";
    // echo $user->eme;
    // echo $user;
    print_r($user);