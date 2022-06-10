<?php
if (!empty($_SESSION['newComment'])) {

    foreach ($_SESSION['newComment'] as $value) {
        echo '<div class ="avis">';

        foreach ($value as $key => $val) {
            if ($key == "name") {
                echo "<div class='$key'>Nom: $val</div>";
            }
            if ($key == "firstname") {
                echo "<div class='$key'>Prénom: $val</div>";
            }
            if ($key == "mail") {
                echo "<div class='$key'>Mail: $val</div>";
            }
            if ($key == "facture") {
                echo "<div class='$key'>Facture: $val</div>";
            }
            if ($key == "comment") {
                echo "<div class='$key'>Commentaire: $val</div>";
            }
            if ($key == "note") {
                echo "<div class='$key'>Note: $val</div>";
            }
        }
        echo '</div>';
    }
}
