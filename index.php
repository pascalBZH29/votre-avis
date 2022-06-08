<?php
require 'models/User.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post">
<label for="name">Nom</label>
<input type="text" name="name">
<label for="name">Prénom</label>
<input type="text" name ="firstname">
<label for="name">e-mail</label>
<input type="text" name ="mail">
<label for="name">facture</label>
<input type="text" name ="facture">
<label for="name">Commentaire</label>
<input type="area" name="comment">
<label for="name">Note</label>
<input type="text" name ="note">
<button type="submit" name="submit">Envoyer</button>
</form>
<div class="listAvis">
<?php
include_once "controllers/indexCtrl.php";
?>
</div>

<script src="script.js"></script>
</body>
</html>