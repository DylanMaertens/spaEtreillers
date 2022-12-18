<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="includes/styleAd.css">
    <title>Administration</title>
</head>
<body>
    <a href="index.php" id="retour">Retour sur le site</a>
    </form>
    <?php
        require "includes/scripts/php/database.php";

        if(isset($_GET['valider']) AND !empty($_GET['valider'])){

            $validId = (int) $_GET['valider'];

            $updateValid = $bdd->prepare("UPDATE calendrier SET traiter = 'oui', reponse = 'oui' WHERE id = ?");
            $updateValid->execute(array($validId));
            
            header("location: administration.php");
        }

        if(isset($_GET['refuser']) AND !empty($_GET['refuser'])){
            
            $cancelId = (int) $_GET['refuser'];

            $updateCancel = $bdd->prepare("UPDATE calendrier SET traiter = 'oui', reponse = 'non' WHERE id = ?");
            $updateCancel->execute(array($cancelId));
            
            header("location: administration.php");
        }

        // if(!empty($_POST['reservationTraitee'])){
        //     $getListCalendar = mysqli_query($bdd,"SELECT * FROM calendrier WHERE traiter = 'oui' ORDER BY id");
        // }else{
            // }
            
        $getListCalendar = mysqli_query($bdd,"SELECT * FROM calendrier ORDER BY id");
        
        while($calendar = mysqli_fetch_array($getListCalendar)){
            $calendarId = $calendar['id'];
            $calendarMail = $calendar['mail'];
            $calendarPseudo = $calendar['pseudo'];
            $calendarMessage = $calendar['message'];
            $calendarPrestation = $calendar['prestation'];
            $calendarDate = $calendar['date'];
            $calendarReponse = $calendar['reponse'];
            $calendarTraiter = $calendar['traiter'];?>
        
        <div class='gridCalendar'>
                <h2><?=$calendarId?></h2>
                <p>Date de réservation:<br><?=$calendarDate?> </p>
                <p><?=$calendarPseudo?> <br> <br>
                <?=$calendarPrestation?> </p>
                <p style="max-height: 5em;overflow:auto"><?=$calendarMessage?> </p>
                <span></span>

            <?php if($calendarTraiter == "oui"){
                    if(isset($calendarReponse) AND $calendarReponse == "oui"){?>
                        <img src="includes/images/valid.svg" alt="VALIDER">
                <?php }else if(isset($calendarReponse) AND $calendarReponse == "non"){ ?>
                    <img src="includes/images/cancel.svg" alt="ANNULER">
                <?php }
                }else if($calendarTraiter == "non"){ ?>
                    <a href="administration.php?valider=<?= $calendar['id']?>"><img src="includes/images/valid.svg" alt="VALIDER"></a>
                    <a href="administration.php?refuser=<?= $calendar['id']?>"><img src="includes/images/cancel.svg" alt="ANNULER"></a>
                    
                    <?php }
        echo "</div> <br>";
        } ?>
    
</body>
</html>