<?php
# --------------
# -- Programmer:  Zachary Rener
# -- Course:      ITSE-1306 (Intro to PHP)
# -- Instructor:  Cesar "Coach" Marrero
# -- Assignment:  Week 13 Lab
# -- Description: Prints the data from a database's table into an html table
# ---------------


echo '
<table class="mt-5">
    <tr>
        <th>Last</th>
        <th>First</th>
        <th>Salary</th>
    </tr>
';

if(mysqli_num_rows($queryResult) > 0):
    while($row = mysqli_fetch_assoc($queryResult)):
        echo "<tr>" .
         "<td>" . $row['lastName']  . "</td>" . 
         "<td>" . $row['firstName'] . "</td>" .
         "<td>" . $row['salary']    . "</td>" .
         "</tr>";
    endwhile;
endif;

echo '</table>';

?>