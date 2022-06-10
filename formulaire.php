<?php
require 'models/User.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body class="bodyFomulaire">
    <div class="votre-avis">
        <h1>Donner votre avis</h1>
        <p>Un problème, une question, envie de nous envoyer un message d’amour ? N’hésitez pas, votre avis nous intéresse !</p>
        <form method="post">
            <div>
                <label for="name">Prénom</label>
                <input type="text" id="firstname" name="firstname" placeholder="Bob" required>
            </div>
            <div>
                <label for="firstname">Nom</label>
                <input type="text" id="name" name="name" placeholder="Bobby" required>
            </div>
            <div>
                <label for="email">Mail</label>
                <input type="email" id="email" name="mail" placeholder="bob.bobby@mail.com" required>
            </div>
            <div>
                <label for="number">Numéro de facture</label>
                <input type="nummber" id="number" name="facture" required>
            </div>
            <div>
                <label for="note">Veuillez donner votre note</label>
                <select name="note" id="note" required>
                    <option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

                </select>
            </div>
            <div>
                <label for="message">Commentaire</label>
                <textarea id="message" name="comment" required></textarea>
            </div>
            <div>
                <button  class="bouton-valider" name="submit" type="submit">Valider</button>
            </div>
        </form>
        <a href="index.php" class="bouton-valider">sortir</a>
    </div>


</body>

</html>