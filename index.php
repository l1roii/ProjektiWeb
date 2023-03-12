<?php
require('autoloader.php');
use App\Lib\Database;
use App\Lib\Info;

$info = new Info();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/2112736a95.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <title>Cyber Security</title>
</head>



<body>
    <div class="container">
        <?php include("includes/header.php") ?>
        <div class="images">
            <div class="background_images">
                <h1>Why is Cyber Security important?</h1>
            </div>
        </div>
        <div class="part2">
            <div class="box">
                <img src="images/phone.png" width="50px" height="50px">
                <h3>Telephones</h3>
                <h4>So, it is the responsibility of security professionals or security analysts
                    to guide employees and individuals of
                    an organization to preserve their digital assets and privacy on their smartphones.</h4>
            </div>
            <div class="box">
                <img src="images/laptop.png" width="70px" height="70px">
                <h3>Laptops | Computers</h3>
                <h4>Computer security, cybersecurity or information technology security (IT security) is the
                    protection of computer systems and networks from the theft of or damage to their hardware,
                    software,
                    or electronic data, as well as from the disruption or misdirection of the services they provide.
                </h4>
            </div>
            <div class="box">
                <img src="images/cloud.png" width="70px" height="50px">
                <h3>Cloud</h3>
                <h4>Cloud computing is the on-demand availability of computer system resources, especially
                    data storage and computing power, without direct active management by the user.</h4>
            </div>
        </div>
        <div class="part3">
            <div class="boxone video">
                <video src="images/video.mp4" type="video/mp4" poster="background8.jpg" width="500px" height="350px" preload="metadata" controls loop>
                </video>
                <h1>What is Cyber Security?</h1>
            </div>
            <div class="boxone chart">
                <img src="images/chart.png" width="500px" height="270px">
                <h2>The chart on the increas of cyber crimes</h2>
            </div>
        </div>
        <?php include("includes/footer.php") ?>
    </div>


    <script>
        $(function () {
            $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
</script>
</body>

</html>