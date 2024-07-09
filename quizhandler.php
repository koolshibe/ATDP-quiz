<?php

include_once 'header.html';

$personalities = ["pacifist", "fun guy", "normal", "extreme", "violent", "true ending"];
$endings = ["liberator", "gamer", "colorblind"];

$bloodlust = 0;

if (isset($_POST["name"])) {
    echo "name: ". htmlspecialchars($_POST["name"]) . "<br>";
} else {
    echo "name is not set<br>";
}
if (isset($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "email: ". htmlspecialchars($_POST["email"]). "<br>";
} else {
    echo "email is not set<br>";
}
if (isset($_POST["age"]) ) {
    echo "age: " . htmlspecialchars($_POST["age"]). "<br>";
} else {
    echo "age is not set<br>";
}
if (isset($_POST["ssn"]) &&  ctype_digit($_POST["ssn"])) {
    echo "ssn: " . htmlspecialchars($_POST["ssn"]). "<br>";
} else {
    echo "ssn is not set<br>";
}
if (isset($_POST["pet"])) {
    echo "pet: " . htmlspecialchars($_POST["pet"]). "<br>";
} else {
    echo "pet is not set<br>";
}
if (isset($_POST["favorite"])) {
    echo "favorite: " . htmlspecialchars($_POST["favorite"]). "<br>";
} else {
    echo "favorite is not set<br>";
}

for ($i = 1; $i<4; $i++) {
    $bloodlust += $_POST["smash_".$i]=="y" ? 1 : 0;
}
if ($_POST["smash_range"]>5) {
    $bloodlust++;
}
if ($_POST["smash_range"]>10) {
    $bloodlust++;
}

echo "Ending: " . $personalities[$bloodlust] . "<br>";
echo "Acheivments:"

if (isset($_POST["smash_ducks"]) && array_search("1", $_POST["smash_ducks"])) {
    echo $endings[0];
}
if ($_POST["smash_game"] == "y") {
    echo $endings[1];
}

?>