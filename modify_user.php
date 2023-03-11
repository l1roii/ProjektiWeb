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
    <title>Cyber Security | Register</title>
</head>
<body>
<?php
    if(isset($_POST['Modify'])){
        $user_name = $_POST['user_name'];
        $user_lastname = $_POST['user_lastname'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_role = 0;
        $user->modifyUser($user_id,$user_name,$user_lastname,$user_email,$user_password);
    }
    ?>
    <div class="Register">
        <h1>Modify</h1>
        <form  method="post">
            <label>Emri:</label><br />
            <input type="text" name="user_name" id="emri"><br />
            <label>Mbiemri: </label><br />
            <input type="text" name="user_lastname" id="mbiemri"><br />
            <label>Email:</label><br />
            <input type="email" name="user_email" id="email"><br />
            <label>Password:</label><br />
            <input type="password" name="user_password" id="password"><br />
            <input type="submit" value="Register" name="Modify">
        </form>
    </div>



</body>
</html>