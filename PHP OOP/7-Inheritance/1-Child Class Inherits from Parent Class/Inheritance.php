<?php

class University{

    public $universityName = "Boston University";
    public static $teacherName = "test";

    function helloUniversity(){
        echo "Hello from University Class" . PHP_EOL;
    }
    public function hasattribute(){
        // $properties = get_object_vars($this);
        // var_dump($properties);
        // static::hasattribute();
        echo static::$teacherName;
    }


}

class Teacher extends University{

    public static $teacherName = "Jane";
    function helloTeacher(){
        echo "Hello from Teacher Class" . PHP_EOL;
    }
    function check(){
        parent::hasattribute();
    }
}

$teacher1 = new Teacher();
$teacher1->helloTeacher();
$teacher1->helloUniversity();
$teacher1->check();
// echo $teacher1->teacherName . PHP_EOL;
// echo $teacher1->universityName . PHP_EOL;
