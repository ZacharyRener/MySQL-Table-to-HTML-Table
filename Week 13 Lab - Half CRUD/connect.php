<?php
# --------------
# -- Programmer:  Zachary Rener
# -- Course:      ITSE-1306 (Intro to PHP)
# -- Instructor:  Cesar "Coach" Marrero
# -- Assignment:  Week 13 Lab Pursue
# -- Description: Establishes a connection to the database. 
# ---------------

$dbConnection = mysqli_connect("localhost", "root", "", "sampledb");
if(!$dbConnection):
    echo "Connection dropped.";
    echo mysqli_connect_errno() . '<br/>';
endif;

?>