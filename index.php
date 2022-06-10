<?php
require 'models/User.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bistrot de la Gare</title>
  <link rel="stylesheet" href="assets/CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body class="bodyIndex">

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#Menu">Menu</a>
  <a href="#Contact">Contact</a>
  <a href="#logon">Logon</a>
</div>
<!-- Load icon library -->

<!-- The form -->
<form class="example" action="action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<h1>Bistrot de la Gare</h1>
<p>12 Rue Gentil Bernard, 92260 Fontenay-aux-Roses</p>
<p>Prix moyen 28 €</p>
<p>-20% sur la carte </p>

<!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/image/image1.webp" style="width:100%">
  <div class="text">Agreable terrasse</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/image/image2.webp" style="width:100%">
  <div class="text">Bistro spacieux</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="assets/image/image3.webp" style="width:100%">
  <div class="text">Se faire servir ou vous voulez</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

<div class="noteMoyenne">
  <?php
  if(!empty($_SESSION['noteMoyenne'])){
    echo  "La note moyenne du restaurant est : " . $_SESSION['noteMoyenne']. " .  le nombre d'avis est : ".sizeof($_SESSION['newNote']);
  }
     
  ?> 

</div>

<div class="listAvis">
	Voir les avis du Bistrot de la gare:<p>
<?php
  include_once "controllers/indexCtrl.php";
  
  ?>
</div>
<div class="buttonAvis">
  <button ><a href="formulaire.php">Donner mon avis</a> </button>
</div>
  
<footer>
  <div class="footer-link">
    <div>
      <p><a href="">Home</a></p>
      <p><a href="">Contact</a></p>  
      <p><a href="">Menu</a></p>    
    </div>
    <div>
      <p><a href="">A propos</a></p> 
      <p><a href="">Reservation</a></p>   
      <p><a href="">Actualite</a></p>  
    </div>
  </div>
  <div>
    <p>© Bistrot de la Gare</p>
  </div>
</footer>
<script src="assets/JS/script.js"></script>

</body>

</html>