<?php

include_once 'header.html';

$personalities = ["pacifist", "fun guy", "normal", "extreme", "violent", "true ending"];
$endings = ["liberator", "gamer", "colorblind"];

$echostring = "";

$bloodlust = 0;

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

function check_question(index) {

}

?>