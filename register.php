<?php
require('Autoloader.php');
use App\Lib\User;

$user = new User;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Cyber Security | Register</title>
</head>
<body>
<?php
    if(isset($_POST['Register'])){
        $user_name = $_POST['user_name'];
        $user_lastname = $_POST['user_lastname'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_role = 0;
        $user->addUser($user_name,$user_lastname,$user_email,$user_password,$user_role);
        
    }
    ?>
    <div class="register">
        <h1>Register</h1>
        <form  method="post">
            <label>Emri:</label><br />
            <input type="text" name="user_name" id="emri"><br />
            <label>Mbiemri: </label><br />
            <input type="text" name="user_lastname" id="mbiemri"><br />
            <label>Email:</label><br />
            <input type="email" name="user_email" id="email"><br />
            <label>Password:</label><br />
            <input type="password" name="user_password" id="password"><br />
            <input id="button" type="submit" value="Register" name="Register">
        </form>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded",

function(event) {
    const BtnSubmit = document.getElementById('submit');
    const validate = (event) => {

        const emri = document.getElementById('user_name').value;
        const mbiemri = document.getElementById('user_lastname');
        const email = document.getElementById('user_email');
        const password = document.getElementById('user_password');
        if (emri.value === "") {
            alert("Please write your name");
            emri.focus();
            return false;
        }
        if (mbiemri.value === "") {
            alert("Please write your lastname");
            mbiemri.focus();
            return false;
        }
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