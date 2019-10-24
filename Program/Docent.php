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
      <form method='post' action='maak.php'>
          <input type='submit' value='Voeg een som toe aan het programma'>
      </form>
      <form method='post' action='show.php'>
          <input type='submit' value='bekijk alle sommen'>
      </form>
    
    </article>
    <nav>
    Welkom <br><?php print("Ingelogt als $gb") ?>
   
    </nav>

  </div>
  <footer>
    <form method='post' action='logout.php'>
      <input type='submit' value='Uitloggen'>
    </form>
  </footer>
</body>
</html>