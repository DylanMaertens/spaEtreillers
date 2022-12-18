<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
    <?php
    require "includes/scripts/php/user/login.php";
    ?>
    <form id="loginForm" method="post">
        <a href="index.php">Retour</a>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mot de Passe" required>
        <input type="submit" name="connexion" value="Se connecter">
        <?php 
            if(isset($erreurMsgConn)){echo '<p>'.$erreurMsgConn.'</p>';};
        ?>
    </form>
</body>
</html>