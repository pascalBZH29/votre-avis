<?php

session_start();

class User {

    function __construct($firstname,$name,$mail,$facture,$comment,$note)
    {
        $this->firstname = $firstname;
        $this->name = $name;
        $this->mail = $mail;
        $this->facture = $facture;
        $this->comment = $comment;
        $this->note = $note;
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function getName(){
        return $this->name;
    }

    public function getMail(){
        return $this->mail;
    }

    public function getFacture(){
        return $this->facture;
    }

    public function getComment(){
        return $this->comment;
    }

    public function getNote(){
        return $this->note;
    }

}


if (isset($_POST['submit'])){
    if (!isset($_SESSION['newComment'])){

        $_SESSION['newComment']=[];
    }
    array_push($_SESSION['newComment'],new User($_POST['name'],$_POST['firstname'],$_POST['mail'],$_POST['facture'],$_POST['comment'],$_POST['note']));
    

 }

 




 

?>