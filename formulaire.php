<?php
require 'controllers/indexCtrl.php';
require 'controllers/formulaireCtrl.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <title>Document</title>
</head>

<body class="bodyFormulaire">
    <div class="votre-avis">
        <h1>Donner votre avis</h1>
        <p>Un problème, une question, envie de nous envoyer un message d’amour ? N’hésitez pas, votre avis nous intéresse !</p>

        <form  action="index.php" method="post">
          
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" required><br>
            </div>
            <div>
           
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" ><br>
            </div>
            <div>
                <label for="email">Mail</label>
                <input type="email" id="email" name="mail" required><br>
            </div>
            <div>
                <label for="facture">Numéro de facture</label>
                <input type="number" id="number" name="facture" required><br>
            </div>
            <div>
                <label for="note">Veuillez donner votre note</label>
                <select name="note" type="number" id="note" required>
                    <option value="" disabled selected hidden>Choisissez votre note</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                </select><br>
            </div>
            <div>
                <label for="message">Commentaire</label>
                <textarea id="message" name="comment" required></textarea><br>
            </div>
            <div>
                <button class="bouton-valider" name="submit" type="submit">Valider</button>
            </div>
        </form>
    </div>

</body>

</html>