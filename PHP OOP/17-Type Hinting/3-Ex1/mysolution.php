<?php 
    declare(strict_types=1);

    class Post{
        private $post;

        public function save_post(string $post) : void{
            $this->post = $post;
        }

        public function fetch_post() : string {
            return $this->post;
        }



    }
    