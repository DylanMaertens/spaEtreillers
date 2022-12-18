<?php
session_start();
require ('includes/scripts/php/database.php');

// $getListMember = $bdd->prepare("SELECT * FROM user");
// $getListMember->execute(array());

//Validation du formulaire
if(isset($_POST['connexion'])){
    //Vérifier si l'utilisateur à bien compléter tout les champs
    if(!empty($_POST['email']) AND !empty($_POST['password'])){

        //Les données de l'utilisateur
        $user_email = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);
        //Vérifier si l'utilisateur existe
        $sql ='SELECT * FROM user';

        if($result=mysqli_query($bdd,$sql)){
            //Récupérer les données de l'utilisateur
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                    if($row['email']==$user_email && password_verify($user_password,$row['password'])){
                        $_SESSION['auth'] = true;
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['pseudo'] = $row['pseudo'];
                        $_SESSION['role'] = $row['role'];

                        //Redirection vers index.php
                        header('Location: index.php');
                    } else{
                        $erreurMsgConn = "Email ou Mot de Passe incorrect";
                    }
                }
            }
    }else{
        $erreurMsgConn = "Veuillez compléter tout les champs.";
    }
    }else{
        $erreurMsgConn = "Veuillez compléter tout les champs.";
    }
}
?>