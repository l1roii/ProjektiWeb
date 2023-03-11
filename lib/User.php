<?php
namespace App\Lib;
use PDO;

class User extends Database{

    public function getID($user_id){
        $sql = "SELECT * FROM users WHERE user_id = $user_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(["$user_id"]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getUser(){
        $sql = "SELECT user_name, user_lastname, user_email FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        while($result = $stmt->fetchAll()){
            return $result;
        }
    }

    public function addUser($user_name,$user_lastname,$user_email,$user_password,$user_role){
        $hash = password_hash($user_password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(user_name, user_lastname, user_email, user_password, user_role)";
        $sql .= "VALUES (?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute(["$user_name","$user_lastname","$user_email","$hash","$user_role"]);
    }

    public function modifyUser($user_id,$user_name,$user_lastname,$user_email,$user_password){
        $sql = "UPDATE users SET user_name=?, user_lastname=?, user_password=?, WHERE user_id=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_name,$user_lastname,$user_email,$user_password,]);
    }

    public function verify_user($user_email, $user_password){

        $sql = "SELECT * FROM users WHERE user_email=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(["$user_email"]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if(is_array($row)){
            if(password_verify($user_password,$row['user_password'])){
                $pass = $row['user_password'];
                $sql = "SELECT * FROM users WHERE user_email=? AND user_password=?";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute(["$user_email","$pass"]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            }
            else{
                echo "<script>alert('Email or password is incoorrect!!');</script>";
            }
        }
    }
    public function deleteUser(){
        $user_id = $_POST['user_id'];
        $sql = "DELETE FROM useres WHERE user_id = $user_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    }
}

?>