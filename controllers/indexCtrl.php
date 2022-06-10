<?php
if (isset($_POST['submit'])) {
   if (!isset($_SESSION['newComment'])) {

       $_SESSION['newComment'] = [];
   


   $error = [];
   if (empty($_POST['name'])) {
       echo $error['name'] = 'Nom obligatoire';
   }

   if (empty($_POST['mail'])) {
       echo $error['mail'] = 'Mail obligatoire';
   } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
       echo $error['mail'] = 'Ce n est pas une addresse email';
   }

   if (empty($_POST['facture'])) {
       echo  $error['facture'] = 'Le numéro de facture est obligatoire';
   }elseif ((int)$_POST['facture'] == false) {
       echo  $error['facture'] = "Veuillez entrer un nombre ";
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

  
   }
}

if (isset($_POST['submit']) && empty($error)){
   if (!isset($_SESSION['newNote'])){

       $_SESSION['newNote']=[];
   }
   array_push($_SESSION['newNote'],(int)$_POST['note']);
   
   $somme = 0;
foreach($_SESSION['newNote'] as $note){
    $somme += $note;
}
   
  $noteMoyenne = $somme / (sizeof($_SESSION['newNote']));
  $_SESSION['noteMoyenne']=$noteMoyenne; 

}




if (!empty($_SESSION['newComment'])) {

    foreach ($_SESSION['newComment'] as $value) {

       echo '<div class ="avis">';
       
        foreach ($value as $key =>$val) {
        if($key=="firstname"){
            $firstname = $val;
        }
        if($key=="name"){
            $name = $val;
        }
        if($key=="mail"){
            $mail = $val;
        }
        if($key=="facture"){
           $facture = $val;
        }
        if($key=="comment"){
           $comment = $val;
        }
        if($key=="note"){
           $note = $val;
        }
    
        }
        echo  "<div class='name'>$firstname $name</div>";
        echo  "<div class='note'>Ma note : $note/5</div>";
        echo  "<div class='comment'>$comment</div>";
        echo  "</div>";
        echo   "<hr>";
     }

}
