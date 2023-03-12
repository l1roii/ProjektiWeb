<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/security_info.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Cyber Security | Security Info</title>
</head>

<body>
    <div class="container">
        <?php include("includes/header.php") ?>
        <div class="security">
            <div class="list">
                <h3>Information Security programs are build around <br>3 objectives,
                    commonly known as CIA </h3>
                <ol>
                    <li>Confidentiality</li>
                    <li>Integrity</li>
                    <li>Availability</li>
                </ol>
                <h3>Apart from this there is one more <br>
                    principle that governs information security programs.</h3>
                <ul>
                    <li>Non repudiation</li>
                    <li>Authenticity</li>
                    <li>Accountability</li>
                </ul>
            </div>
            <div class="slide">
                <div class="slide_img"></div>
            </div>
        </div>
        <div class="part1">
            <div class="table">
                <table id="costumers">
                    <tr>
                        <th>STRIDE-LM</th>
                        <th>Threat</th>
                        <th>Property</th>
                        <th>Definition</th>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>Spoofing</td>
                        <td>Authentication</td>
                        <td>Impersonating</td>
                    </tr>
                    <tr class="row">
                        <td>T</td>
                        <td>Tampering</td>
                        <td>Integrity</td>
                        <td>Modifying data</td>
                    </tr>
                    <tr>
                        <td>R</td>
                        <td>Repudiation</td>
                        <td>Non-repudiation</td>
                        <td>None honesty</td>
                    </tr>
                    <tr class="row">
                        <td>I</td>
                        <td>Information Disclosure</td>
                        <td>Confidentiality</td>
                        <td>Exposing info</td>
                    </tr>
                    <tr class>
                        <td>D</td>
                        <td>Denial of service</td>
                        <td>Availability</td>
                        <td>Deny/Degrade service</td>
                    </tr>
                    <tr class="row">
                        <td>E</td>
                        <td>Elevation of Privilege</td>
                        <td>Authorization</td>
                        <td>Gain without aouthorization</td>
                    </tr>
                    <tr class>
                        <td>LM</td>
                        <td>Lateral Movement</td>
                        <td>Segmentation</td>
                        <td>Elevation of Privilege</td>
                    </tr>
                </table>
                <h3>Threat Categorization, Security Properties and Controls </h3>
            </div>
            <div class="vid">
                <ul>
                    <li><img src="images/iot.jpg" width="300" height="175"></li>
                    <li><a href="https://www.nist.gov/video/what-internet-things-iot-and-how-can-we-secure-it" target="blank">What is IoT and how can we secure it.</a></li>
                </ul>
            </div>
        </div>
        <?php include("includes/footer.php") ?>
    </div>
</body>

</html>