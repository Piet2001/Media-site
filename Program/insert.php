<?php
include "connect.php";
$som = $_POST["som"];
$ans = $_POST["ans"];

    // Hier wordt connectie gemaakt met de database 
    $mysql = mysqli_connect($server,$user,$pass,$db) or die("Er is geen verbinding met de database"); 

    // Hieronder staan de query's, die moeten worden uitgevoerd 
    $resultaat=mysqli_query($mysql," INSERT INTO sommen (ID,som,ans) VALUES (NULL,'$som','$ans')") 
    or die("Gegvens ophalen is mislukt!"); 
    
    // Hier wordt de connectie met de database weer verbroken 
    mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!");

header ("location: Docent.php");
?>