<?php
# --------------
# -- Programmer:  Zachary Rener
# -- Course:      ITSE-1306 (Intro to PHP)
# -- Instructor:  Cesar "Coach" Marrero
# -- Assignment:  Chapter 3 Pursue Script 2
# -- Description: Defines variables and prints their values within HTML.
# ---------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    #Define the path of the image in a variable
    $image_url = 'http://zacharyrener.com/plus-gray.png';

    #Print the variable into an HTML <img /> tag
    echo "<img src='$image_url' />";
    ?>
</body>
</html>