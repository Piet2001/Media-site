<?php
    session_start();
    $gb=$_POST["gebruikersnaam"];
    $ww=$_POST["wachtwoord"];
    $_SESSION["gebruikersnaam"] =$gb;
    include "connect.php";


    if (isset($_POST['Leerling']))
        {
            $cat = "Leerling";
        }
    if (isset($_POST['Docent']))
        {
            $cat = "Docent";
        }

    // Maak verbinding met de database en controleer of de gegevens correct zijn
    
    $mysql = mysqli_connect($server,$user,$pass,$db) or die("Fout: Er is geen verbinding met de MySQL-server tot stand gebracht!"); 
    
    // Hieronder staan de query's, die moeten worden uitgevoerd 
    $resultaat=mysqli_query($mysql," select Voornaam from gebruikers where gebruikersnaam='$gb' and wachtwoord='$ww' and rol='$cat'")
       or die("Uw gegevens zijn niet correct. <form method='post' action='../Program/'> <input type='submit' value='ga terug'> </form>"); 
       
    // Hier wordt de connectie met de database weer verbroken 
    mysqli_close($mysql) or die("Het verbreken van de verbinding met de MySQL-server is mislukt!"); // je kunt mysql ook $verbinding(of wat je wil) noemen
    
    while(list($voornaam) = mysqli_fetch_row($resultaat))
    {
        $aantal = mysqli_num_rows($resultaat);
    }

    if ($aantal == 1){
        header("location: $cat.php");
    }
    else { header("location: ../Program/");
    }
?>