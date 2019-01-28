<?php
# --------------
# -- Programmer:  Zachary Rener
# -- Course:      ITSE-1306 (Intro to PHP)
# -- Instructor:  Cesar "Coach" Marrero
# -- Assignment:  Chapter 3 Pursue Script 1
# -- Description: Defines variables and prints their values.
# ---------------

#Define Variables
$scalar_variable     = 'This is a scalar variable';
$non_scalar_variable = [ 'This', 'is', 'not', 'scalar' ];

#Print Their Values
print_r("$scalar_variable \n");
print_r($non_scalar_variable);
?>