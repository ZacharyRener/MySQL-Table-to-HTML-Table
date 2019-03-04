<?php
# --------------
# -- Programmer:  Zachary Rener
# -- Course:      ITSE-1306 (Intro to PHP)
# -- Instructor:  Cesar "Coach" Marrero
# -- Assignment:  Week 8 Lab
# -- Description: Determines if two given strings are anagrams after validating the user input 
# ---------------

if (entryIsValid()) {
    $stringOne = $_POST['stringOne'];
    $stringTwo = $_POST['stringTwo'];
    entryIsAnagram($stringOne, $stringTwo);
} else {
    print '<h1>Invalid form entry. Please return <a href="/week8lab/index.html">here</a>.</h1>';
    print '<p><em>Tip: Make sure both strings you enter are the same in length.</em></p>';
}

function entryIsAnagram($stringOne, $stringTwo) {

    $wordOne = str_split($stringOne);
    $wordTwo = str_split($stringTwo);
    $isAnagram = true;
    $foundCharacters = [];

    foreach( $wordOne as $character ) {
        if(!in_array($character, $wordTwo) || isset($foundCharacters[$character])){
            $isAnagram = false;
        } else {
            $foundCharacters[$character] = $character;
        }
    }

    if ($isAnagram) {
        print '<h1>Yes, the two strings are an anagram.</h1>';
        print "<p>Enter string #1: <strong>$stringOne</strong></p>";
        print "<p>Enter string #2: <strong>$stringTwo</strong></p><br/>";
        print "<p>\"$stringOne\" and \"$stringTwo\" are anagrams</p>";
    } else {
        print '<h1>No, the two strings are not an anagram.</h1>';
        print 'Please return <a href="/week8lab/index.html">here</a>.</h1>';
        print "<p>Enter string #1: <strong>$stringOne</strong></p>";
        print "<p>Enter string #2: <strong>$stringTwo</strong></p><br/>";
        print "<p>\"$stringOne\" and \"$stringTwo\" are NOT anagrams</p>";
    }

}

function entryIsValid() {
    return (isset($_POST['stringOne']) && isset($_POST['stringTwo'])) &&
        (strlen($_POST['stringOne']) > 0 && strlen($_POST['stringTwo']) > 0)
            ? ( strlen($_POST['stringOne']) == strlen($_POST['stringTwo']) )
            : false;
}
?>