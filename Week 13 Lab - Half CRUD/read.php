<?php
# --------------
# -- Programmer:  Zachary Rener
# -- Course:      ITSE-1306 (Intro to PHP)
# -- Instructor:  Cesar "Coach" Marrero
# -- Assignment:  Week 13 Lab
# -- Description: Reads the data from a table
# ---------------

$sql = 'select * from week13';
$queryResult = mysqli_query($dbConnection, $sql);

?>