<?php

namespace App\Lib;
use App\Lib\Database;

class Contact extends Database{
        public function getContact(){
            $sql = "SELECT * FROM contact";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result; 
        }

        public function addContact($firstname,$lastname,$email,$idea){
            $sql = "INSERT INTO contact(firstname,lastname,email,idea)";
            $sql .= "VALUES (?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute(["$firstname","$lastname","$email","$idea"]);
        }
    }

?>