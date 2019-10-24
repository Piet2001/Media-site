<?php
session_start();
$naam = $_SESSION["voornaam"];
$gb = $_SESSION["gebruikersnaam"];

?>

<html>
<link rel="stylesheet" type="text/css" href="../Hoofdsite/style.css">
<title>Oefenen | Z.A.R.O.</title>

<body>
  <header><img src="../Hoofdsite/Logo_v2.png" alt="gegevens" style="width: 200px; height: auto"></header>
  <div id="main">
    <article>
        <?php
        include "connect.php";
        //---------------------------------------
        // Hier wordt connectie gemaakt met de database 
        $mysql = mysqli_connect($server,$user,$pass,$db) or die("Er is geen verbinding met de database"); 

        // Hieronder staan de query's, die moeten worden uitgevoerd 
        $resultaat=mysqli_query($mysql," select ID, som, ans from sommen") 
        or die("Gegvens ophalen is mislukt!"); 
        
        // Hier wordt de connectie met de database weer verbroken 
        mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); // je kunt mysql ook $verbinding(of wat je wil) noemen

        print("<table border='1'>");

        print("<strong><tr><td>ID </td><td>SOM </td><td>Antwoord</td></tr></strong>");//tabel kop
        while(list($ID,$som,$ans) = mysqli_fetch_row($resultaat))   // achter list staat hetzelfde als achter select
        {     
        echo"<tr><td>$ID </td><td>$som</td><td>$ans</td></tr>"; 
        }
        ?>
    
        <form method='post' action='Docent.php'>
            <input type='submit' value='ga terug naar docent pagina'>
        </form>
    </article>
    <nav>
    Welkom <br><?php print("Ingelogt als $gb") ?>
    
   
    </nav>

  </div>
</body>
</html>