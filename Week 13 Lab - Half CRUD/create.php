<?php
# --------------
# -- Programmer:  Zachary Rener
# -- Course:      ITSE-1306 (Intro to PHP)
# -- Instructor:  Cesar "Coach" Marrero
# -- Assignment:  Week 13 Lab
# -- Description: Creates a table for the application
# ---------------

$sql = '
    create table week13(
        lastName varchar(255) not null,
        firstName varchar(255) not null,
        salary float not null 
    )';

echo (!$dbConnection->query($sql))
    ? 'table creation failed: ' . $dbConnection->error . '<br/>'
    : 'table created successfully' . '<br/>';

$sql = '
    insert into week13
    values ("Ling","Mai",55900),
           ("Johnson","Jim",56000),
           ("Jones","Aaron",46500),
           ("Swift","Jeffrey",124000),
           ("Xiong","Fong",65000),
           ("Zarnecki","Sabrina",55600)
    ';

echo (!$dbConnection->query($sql))
    ? 'data insertion failed: ' . $dbConnection->error . '<br/>'
    : 'data inersted successfully' . '<br/>';

?>