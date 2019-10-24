<?php
session_start();
$gb = $_SESSION["gebruikersnaam"];
?>

<html>
<link rel="stylesheet" type="text/css" href="../Hoofdsite/style.css">
<title>Oefenen | Z.A.R.O.</title>

<body>
  <header><img src="../Hoofdsite/Logo_v2.png" alt="gegevens" style="width: 200px; height: auto"></header>
  <div id="main">
    <article>
        Voer de gegevens in voor de nieuwe som voor in de database:
        <form method='post' action='insert.php'>
            Som      <input type='text' name='som'><br>
            Antwoord <input type='text' name='ans'><br>
            <input type='submit' name='oplaan' value='Zet de som in de database'>
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