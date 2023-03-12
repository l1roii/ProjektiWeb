<?php

require('autoloader.php');

use App\lib\session;

$session = new session;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/2112736a95.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <title>Cyber Security</title>
</head>
     <body>
  
<div class="header">
    <div class="logo">
        <img src="images/logo1.png" width="120" height="70">
    </div>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="security_info.php">INFORMATION SECURITY</a></li>
        <li><a href="programs.php">PROGRAMS</a></li>
        <li><a href="contactus.php">CONTACT US</a></li>
        <?php if (isset($_SESSION['user_email'])) {
            if ($_SESSION['user_role'] != 0) {
        ?>
                <li><a href="admin.php">ADMIN</a></li>
        <?php }
        } ?>
    </ul>
    <div class="login_register">
        <ul id="login">
            <?php if (isset($_SESSION['user_email'])) :
                echo $session->fullname; ?>
            <?php else : ?>
                <li><a href="register.php">Register</a></li>
            <?php endif; ?>

            <?php if (isset($_SESSION['user_email'])) : ?>
                <li><a href="logout.php">Log out</a></li>
            <?php else : ?>
                <li><a href="login.php">Log in</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>