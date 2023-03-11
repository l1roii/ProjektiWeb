<?php

namespace App\Lib;
use App\Lib\Database;
use PDO;

    class Post extends Database{
        public function getPost(){
            $sql = "SELECT * FROM posts";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result; 
        }

        public function addPost($post_picture,$post_name,$post_description){
            $sql = "INSERT INTO posts(post_picture,post_name,post_description)";
            $sql .= "VALUES (?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute(["$post_picture","$post_name","$post_description"]);
        }
    }

?>