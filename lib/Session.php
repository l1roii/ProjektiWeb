<?php

namespace App\Lib;

class Session{

    public $signed_in = false;
    public $user_role;
    public $user_email;
    public $fullname;

    public function __construct(){ 
        session_start();
        $this->check_the_login();
    }

    public function check_the_login(){
        if(isset($_SESSION['user_email'])){
            $this->user_role = $_SESSION['user_role'];
            $this->user_email = $_SESSION['user_email'];
            // $this->fullname = $_SESSION['fullname'];
            $this->signed_in = true;
        }
        else{
            unset($this->user_email);
            $this->signed_in = false;
        }
    }

    public function login($user){
        if($user){
            $this->user_role = $_SESSION['user_role'] = $user['user_role'];
            $this->user_email = $_SESSION['user_email'] = $user['user_email'];
            $this->fullname =  $_SESSION['fullname'] = $user['user_name'] . " " . $user['user_lastname'];
            $this->signed_in = true;
        }
    }

    public function logout(){
        unset($this->user_email);
        unset($_SESSION['user_role']);
        unset($_SESSION['user_email']);
        unset($_SESSION['fullname']);
        $this->signed_in = false;
    }
}

?>