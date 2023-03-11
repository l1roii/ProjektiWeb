<?php
require('autoloader.php');

use App\Lib\User;
use App\Lib\Session;

$session = new Session();
$user = new User;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Cyber Security | Log in</title>
</head>
<?php

if (isset($_POST['login'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_found = $user->verify_user($user_email, $user_password);
    if ($user_found) {
        $session->login($user_found);
        header("Location: projekti.php");
    } else {
        echo '<script>alert("Përdoruesi ose fjalëkalimi juaj nuk është i saktë!");</script>';
    }
} else {
    $user_email = "";
    $user_password = "";
}

?>

<body>
    <div class="login">
        <h1>Log in</h1>
        <form class="info" method="post">
            <label>Email:</label><br />
            <input type="email" name="user_email" id="email"><br />
            <br>
            <label>Password:</label><br />
            <input type="password" name="user_password" id="password"><br />
            <br>
            <input type="submit" value="Log in" name="login">
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded",

            function(event) {
                const BtnSubmit = document.getElementById('submit');
                const validate = (event) => {

                    const email = document.getElementById('email');
                    
                    const password = document.getElementById('password');
                    if (email.value === "") {
                        alert("Please write your email");
                        email.focus();
                        return false;
                    }
                    if (password.value === "") {
                        alert("Please write your passwowrd");
                        password.focus();
                        return false;
                    }
                    if (!emailValid(email.value)) {
                        alert("Ju lutem te shtoni email'in valid.");
                        email.focus();
                        return false;
                    }
                    return true;
                }
                const emailValid = (email) => {
                    const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
                    return emailRegex.test(email.toLowerCase());

                }
                BtnSubmit.addEventListener('click', validate);
            });
    </script>
</body>

</html>