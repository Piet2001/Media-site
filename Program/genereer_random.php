<?php
session_start();

$rand = rand(1,$max);

$getal1 = rand(1,100);
$getal2 = rand(1,10);
$optie = rand(1,2);

if($optie == 1)
{
    $vraag =  "$getal1 + $getal2";
    $antwoord = $getal1 + $getal2;
}
if($optie == 2)
{
    $vraag = "$getal1 - $getal2";
    $antwoord = $getal1 - $getal2;
}

$_SESSION["vraag"] = $vraag;
$_SESSION["antwoord"] = $antwoord;

header ("location: oefen_random.php")
?>