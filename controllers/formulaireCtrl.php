<?php
var_dump($_SESSION['newComment']);
require 'models/User.php';

if (!isset( $_SESSION['error'])) {

       
    $_SESSION['error'] = [];

}

if (isset($_POST['submit'])) {
    if (!isset($_SESSION['newComment'])) {

       
        $_SESSION['newComment'] = [];
    }

    date_default_timezone_set('Europe/Paris');
    $date = date('d-m-y');
    $time = date('H:i:s');

    if (empty($_POST['firstname'])) {
        $error['firstname'] = 'Prénom obligatoire';
        array_push($_SESSION['error'],$error['firstname']);
     }

    if (empty($_POST['name'])) {
       $error['name'] = 'Nom obligatoire';
       array_push($_SESSION['error'],$error['name']);
    }

    if (empty($_POST['mail'])) {
        $error['mail1'] = 'Mail obligatoire';
        array_push($_SESSION['error'],$error['mail1']);
    } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $error['mail2'] = 'Ce n est pas une addresse email';
        array_push($_SESSION['error'],$error['mail2']);
    }

    if (empty($_POST['facture'])) {
        $error['facture'] = 'Le numéro de facture est obligatoire';
        array_push($_SESSION['error'],$error['facture']);
    }elseif ((int)$_POST['facture'] == false) {
        $error['facture2'] = "Veuillez entrer un nombre ";
        array_push($_SESSION['error'],$error['facture2']);
    } 

    if (empty($_POST['comment'])) {
        $error['comment'] = 'Commentaire obligatoire';
        array_push($_SESSION['error'],$error['comment']);
    }

    if (empty($_POST['note'])) {
        $error['note1'] = 'La note est obligatoire';
        array_push($_SESSION['error'],$error['note1']);
    } elseif ((int)$_POST['note'] == false) {
        $error['note2'] = " Veuillez séléctionner une note";
        array_push($_SESSION['error'],$error['note2']);
    }

    if (empty($error)) {
        array_push($_SESSION['newComment'], new User($_POST['name'], $_POST['firstname'], $_POST['mail'], $_POST['facture'], $_POST['comment'], $_POST['note'], $date, $time));
    $_SESSION['error'] = [];
    }else{
        header("refresh:10; url=formulaire.php");
    }
}

if (isset($_POST['submit']) && empty($error)) {
    if (!isset($_SESSION['newNote'])) {

        $_SESSION['newNote'] = [];
    }
    array_push($_SESSION['newNote'], (int)$_POST['note']);

    $somme = 0;
    foreach ($_SESSION['newNote'] as $note) {
        $somme += $note;
    }


    $noteMoyenne = $somme / (sizeof($_SESSION['newNote']));
    $_SESSION['noteMoyenne'] = $noteMoyenne;
}

if (!empty($_SESSION['error'])) {
   
   
    echo  "<div class='listErrors'>";
    echo "Il y eu une erreur lors de l'envoi de votre avis, veuillez réessayer!<p>";
    foreach ($_SESSION['error'] as $value) {
        echo  "<div class='error'>$value</div>";
    }
    echo "<p>Vous allez étre automatiquement redirigé vers le formulaire veuillez patienter...";
    echo "</div>";
}
?>

