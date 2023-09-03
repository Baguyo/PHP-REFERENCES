<?php 
 
    class Post{
        public $post;
        public $has_post = true;
        function __construct($post)
        {
            $this->post = $post;
        }
    }


    function copy_object($source, $destination){
        foreach ($source as $key => $value) {
            $destination->$key = $value;
        }
        return $destination;
    }

    $post1 = new Post("I'm a new post");    
    

    $post2 = copy_object($post1, $post2);
    echo $post2->post;

