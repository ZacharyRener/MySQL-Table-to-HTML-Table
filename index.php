<?php
# --------------
# -- Programmer:  Zachary Rener
# -- Course:      ITSE-1306 (Intro to PHP)
# -- Instructor:  Cesar "Coach" Marrero
# -- Assignment:  Chapter 3 - Lab
# -- Description: Traditional hello world program using echo()
# ---------------

$dynamic_content = 'Hello world, my name is Zachary Rener';

echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Week 3 - Lab</title>
        <link rel="stylesheet" type="text/css" href="/personal.css">
    </head>
    <body>
';

echo "
    <h1 id='heading'>$dynamic_content</h1>
    </body>
    </html>
";
?>