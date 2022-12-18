<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <title>SPA Etreillers</title>
</head>
<body>
    <?php 
    // session_start();
    require "includes/scripts/php/user/login.php";
    require "includes/scripts/php/reservation.php";
    ?>
    <!-- <nav>
        <a href="#">Accueil</a>
        <a href="#">Prestations</a>
        <a href="#" id="contactBtn">Contact</a>
    </nav> -->

    <div id="presentation">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsum dolores quis, eveniet magni ab soluta, beatae nisi quo aperiam facilis officia aut eius officiis, blanditiis ad iste dolor suscipit? Necessitatibus distinctio atque maiores quae aperiam, perspiciatis amet eligendi dolorem quisquam. Odio consequatur, exercitationem ad, iure maxime amet error fuga excepturi praesentium, earum sapiente unde perspiciatis? Dolorum, atque at aut quia veritatis natus fuga. Facere fugit doloribus veritatis totam, non, ipsum sunt error quas aliquid, ullam iusto quam ab? Adipisci enim magnam quae quod, ipsum perspiciatis aut eius totam quos dicta esse, consequatur minima illum aperiam fugit voluptate at aliquid.</div>
    <div id="contactForm">
        <form action="" method="post">
            <span id="fermerFormBtn">FERMER</span>
            <input type="email" name="emailForm" placeholder="Email" required>
            <input type="text" name="pseudoForm" placeholder="Prénom" required>
            <br>
            <textarea name="textareaForm" cols="30" rows="13" placeholder="Votre message ... (optionnel)"></textarea>
            <input type="text" id="prestation" name="prestation" placeholder="Veuillez selectionner une prestation dans la liste de droite." required autocomplete="off">
            <input type="datetime-local" id="dateReservation" name="dateReservation" required>
            <input type="submit" id="submitButon" name="submitCalendrier" value="Envoyer"> 
        </form>
    </div>
    <section id="informations">
        <div class="cadre" id="image"></div>
        <div class="cadrePresta" id="prestations">
            
            <div class="prestationsBouton">
                <span id="menu1" class="menu">PRESTATION 1 <span class="fleche">T</span></span>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem quae qui corporis? Eos rem id et delectus quam suscipit magnam. Doloribus ipsa quidem ea incidunt saepe libero a! In, distinctio?</p>
                    <div class="prestaBas">
                        <span id="reservation1">Réserver</span>
                        <h4>PRIX</h4>
                    </div>
                </div>
            </div>

            <div class="prestationsBouton">
                <span id="menu2" class="menu">PRESTATION 2 <span class="fleche">T</span></span>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem quae qui corporis? Eos rem id et delectus quam suscipit magnam. Doloribus ipsa quidem ea incidunt saepe libero a! In, distinctio?</p>
                    <div class="prestaBas">
                        <span id="reservation2">Réserver</span>
                        <h4>PRIX</h4>
                    </div>
                </div>
            </div>
        
            <div class="prestationsBouton">
                <span id="menu3" class="menu">PRESTATION 3 <span class="fleche">T</span></span>
                <div class="content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem quae qui corporis? Eos rem id et delectus quam suscipit magnam. Doloribus ipsa quidem ea incidunt saepe libero a! In, distinctio?</p>
                    <div class="prestaBas">
                        <span id="reservation3">Réserver</span>
                        <h4>PRIX</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Copyright 2022 |</p>
        <a href="">CGU</a>
        <a href="">CGV</a>
        <a href="">Mentions Légales</a>
        <a id="contactBtn" style="cursor:pointer;">Contact</a>
        
        <?php   
            if(!isset($_SESSION['auth'])){ 
                echo "<a href='login.php'>Se Connecter</a>";
            }else{ 
                echo "<a href='administration.php'>Administration</a>";
                echo "<a href='includes/scripts/php/user/logout.php'><img src='includes/images/logout.png' alt='Se Déconnecter' title='Se Déconnecter'></a>";
            }
        ?>
    </footer>
    
    <script src="includes/scripts/script.js"></script>
</body>
</html>