<?php
require('autoloader.php');

use App\Lib\Contact;

$contact = new Contact;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutus.css">
    <title>Cyber Security | About us</title>
</head>

<?php
if (isset($_POST['add'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
    $idea = $_POST['idea'];
	$contact->addContact($firstname, $lastname, $email,$idea);
}
?>

<body>
    <div class="container">
        <?php include("includes/header.php") ?>
        <div class="part1">
            <h2>Contact Us</h2>
            <div class="contact">
                <form method="post">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="lname">Email</label>
                    <input type="text" id="lname" name="email" placeholder="Your last name..">

                    <label for="subject">Idea</label>
                    <textarea id="subject" name="idea" placeholder="Write your idea.." style="height:200px"></textarea>

                    <input type="submit" name="add" value="Submit">
                </form>
            </div>
        </div>
        <?php include("includes/footer.php") ?>
    </div>
</body>

</html>