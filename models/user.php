<?php

session_start();

class User
{

    function __construct(string $firstname, string $name, string $mail,int $facture, string $comment,int $note)

    {
        $this->firstname = $firstname;
        $this->name = $name;
        $this->mail = $mail;
        $this->facture = $facture;
        $this->comment = $comment;
        $this->note = $note;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function getFacture()
    {
        return $this->facture;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getNote()
    {
        return $this->note;
    }
}


if (isset($_POST['submit'])) {
    if (!isset($_SESSION['newComment'])) {

        $_SESSION['newComment'] = [];
    }


    $error = [];


    array_push($_SESSION['newComment'],new User($_POST['name'],$_POST['firstname'],$_POST['mail'],$_POST['facture'],$_POST['comment'],$_POST['note']));
   

 }

 if (isset($_POST['submit'])){
    if (!isset($_SESSION['newNote'])){

        $_SESSION['newNote']=[];
    }
    array_push($_SESSION['newNote'],(int)$_POST['note']);

    array_push($_SESSION['newComment'],new User($_POST['firstname'],$_POST['name'],$_POST['mail'],$_POST['facture'],$_POST['comment'],$_POST['note']));
    
    $somme = 0;
 foreach($_SESSION['newNote'] as $note){
     $somme += $note;
 }
    
   $noteMoyenne = $somme / (sizeof($_SESSION['newNote']));
   $_SESSION['noteMoyenne']=$noteMoyenne; 





    if (empty($_POST['name'])) {
        echo $error['name'] = 'Nom obligatoire';
    }

    if (empty($_POST['mail'])) {
        echo $error['mail'] = 'Mail obligatoire';
    } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        echo $error['mail'] = 'Ce n est pas une addresse email';
    }

    if ((int)$_POST['facture'] == false) {
        echo  $error['facture'] = "Veuillez entrer un nombre ";
    } elseif (empty($_POST['facture'])) {
        echo  $error['facture'] = 'Le numéro de facture est obligatoire';
    }


    if (empty($_POST['comment'])) {
        echo  $error['comment'] = 'Commentaire obligatoire';
    }
    if (empty($_POST['note'])) {
        echo  $error['note'] = 'La note est obligatoire';
    } elseif ((int)$_POST['note'] == false) {
        echo  $error['note'] = " Veuillez séléctionner une note";
    }

    if (empty($error)) {
        array_push($_SESSION['newComment'], new User($_POST['name'], $_POST['firstname'], $_POST['mail'], $_POST['facture'], $_POST['comment'], $_POST['note']));
    }
