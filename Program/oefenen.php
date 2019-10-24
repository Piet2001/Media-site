<html>
<link rel="stylesheet" type="text/css" href="../Hoofdsite/style.css">
<title>Oefenen | Z.A.R.O.</title>

<body>
  <header><img src="../Hoofdsite/Logo_v2.png" alt="gegevens" style="width: 200px; height: auto"></header>
  <div id="main">
    <article>
    <?php
    session_start();
include "connect.php";
$gb = $_SESSION["gebruikersnaam"];
$som = $_SESSION["som"];
$ans = $_SESSION["ans"];

if(isset($_POST["antwoord"]))
{
    $ant = $_POST["antwoord"];
    if($ant == $ans)
    {
        Print("Goed gedaan!!<br>
        <form method='post' action='genereer.php'>
        <input type='submit' value='Doe nog een som'>
        </form>");
    }
    else
    {
        $melding = "Helaas, probeer het nogmaals";

        Print("$melding<br>");
        Print(" $som= <br>
        <form method='post' action='oefenen.php'>
        <input type='text' name='antwoord'>
        <input type='submit' value='controleer'>
        </form>");
    }   
}

if(!isset($_POST["antwoord"]))
{
    $melding = "Voer het juiste antwoord in";

    Print("$melding<br>");
    Print(" $som= <br>
    <form method='post' action='oefenen.php'>
    <input type='text' name='antwoord'>
    <input type='submit' value='controleer'>
    ");
}



?>
    
    </article>
    <nav>
    Welkom <br><?php print(" $gb") ?>
    Je huidige score is: <?php print("$score") ?>
    </nav>

  </div>
  <footer>
  <form method='post' action='logout.php'>
        <input type='submit' value='Uitloggen'>
    </form>
    <form method='post' action='Leerling.php'>
        <input type='submit' value='Terug naar menu'>
    </form>
  </footer>
</body>
</html>