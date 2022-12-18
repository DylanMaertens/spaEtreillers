<?php

    if(isset($_POST['submitCalendrier'])){
        echo "test";
        $mail = htmlspecialchars($_POST['emailForm']);
        $pseudo = htmlspecialchars($_POST['pseudoForm']);
        $message = nl2br(htmlspecialchars($_POST['textareaForm']));
        $prestation = htmlspecialchars($_POST['prestation']);
        $date = htmlspecialchars($_POST['dateReservation']);

        $timestamp = strtotime($date);
        $newDate = date("d-m-Y H:m",$timestamp);

        $insetUserOnWebsite = $bdd->prepare('INSERT INTO calendrier(mail, pseudo, message, prestation, date, traiter) VALUES(?, ?, ?, ?, ?, ?)');
        $insetUserOnWebsite->execute(array($mail, $pseudo, $message, $prestation, $newDate, "non"));

        header("location: index.php");
    }

?>