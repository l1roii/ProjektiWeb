<?php

namespace App\Lib;
use App\Lib\Database;
use PDO;

    class Info extends Database{

        public function getInto(){
            $sql = "SELECT * FROM info";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        
    }

?>