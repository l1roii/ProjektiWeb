<?php
require('Autoloader.php');

use App\Lib\User;
use App\Lib\Contact;

$users = new User();
$contacts = new Contact();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container">
        <?php include("includes/header.php") ?>
        <div class="main">
            <!-- Sidebar -->
            <section class="sidebar">
                <nav class="nav">
                    <ul>
                        <li class="active"><a href="#">Admin's Dashboard</a></li>
                        <li class="active"><a href="#">Registered users</a></li>
                        <li class="active"><a href="#"></a></li>
                        <li class="active"><a href="#"></a></li>
                    </ul>
                </nav>
            </section>
            <table class="table-con">
                <thead>
                    <tr>
                        <th>
                            <h1>First Name</h1>
                        </th>
                        <th>
                            <h1>Last Name</h1>
                        </th>
                        <th>
                            <h1>Email</h1>
                        </th>
                        <th>
                            <h1>Modify</h1>
                        </th>
                        <th>
                            <h1>Delete</h1>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users->getUser() as $user) : ?>
                        </tr>
                        <td><?php echo $user['user_name']; ?></td>
                        <td><?php echo $user['user_lastname']; ?></td>
                        <td><?php echo $user['user_email']; ?></td>
                        <td> <a href="modify_user.php">Modify</a> </td>
                        <td> <a name="delete" type="submit" onclick="return Alert()" href="">Delete</a> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php foreach ($contacts->getContact() as $contact) : ?>
        <div class="card">
            <h1><?php echo $contact['firstname']; ?> <?php echo $contact['lastname']; ?></h1>
            <p class="price"><?php echo $contact['email']; ?></p>
            <p><?php echo $contact['idea']; ?></p>
            <p><button>Add to Cart</button></p>
        </div>
        <?php endforeach; ?>
        <script>
            function Alert() {
                $alert = confirm("Are you sure you want to delete this?");
                if ($alert) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
        <?php
if (isset($_POST['delete'])) {
    $users->deleteUser();
    header("Location: cameras.php");
}
?>
        <?php include("includes/footer.php") ?>
</body>

</html>