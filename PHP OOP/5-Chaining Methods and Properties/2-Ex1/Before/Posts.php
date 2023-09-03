<?php


class Posts
{
    public $content;

    function __construct(){
        echo "This is Constructor!" . PHP_EOL;
        $this->content = "hello world";
    }

    function __destruct(){
        echo "This is Destructor!" . PHP_EOL;
    }

    function printContent(){
        echo $this->content . " is the content" . PHP_EOL;
        return $this;
    }

}

$post1 = new Posts();
echo $post1->printContent()->content;
//Print and Get the $content property from the $post1 at the same time.
