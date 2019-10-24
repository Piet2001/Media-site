<?php
session_start();
include "connect.php";
$gb = $_SESSION["gebruikersnaam"];

// Maak verbinding met de database en controleer of de gegevens correct zijn
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!"); 
// Hieronder staan de query's, die moeten worden uitgevoerd 
$resultaat=mysqli_query($mysql," select som, ans  from sommen")
or die("Uw gegevens zijn niet correct. <form method='post' action='../Program/'> <input type='submit' value='ga terug'> </form>"); 
// Hier wordt de connectie met de database weer verbroken 
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); // je kunt mysql ook $verbinding(of wat je wil) noemen

$max = mysqli_num_rows($resultaat);

$rand = rand(1,$max);


// Maak verbinding met de database en controleer of de gegevens correct zijn
$mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!"); 
// Hieronder staan de query's, die moeten worden uitgevoerd 
$resultaat=mysqli_query($mysql," select som, ans  from sommen where ID='$rand'")
or die("Uw gegevens zijn niet correct. <form method='post' action='../Program/'> <input type='submit' value='ga terug'> </form>"); 
// Hier wordt de connectie met de database weer verbroken 
mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); // je kunt mysql ook $verbinding(of wat je wil) noemen

while(list($som,$ans) = mysqli_fetch_row($resultaat))
{
    $_SESSION["som"] = $som;
    $_SESSION["ans"] = $ans;
}

header ("location: oefenen.php");