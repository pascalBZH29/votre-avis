<?php

if (!empty($_SESSION['newComment'])) {

    foreach ($_SESSION['newComment'] as $value) {
        echo '<div class ="avis">';
        foreach ($value as $key => $val) {
            if ($key == "firstname") {
                $firstname = $val;
            }
            if ($key == "name") {
                $name = $val;
            }
            if ($key == "mail") {
                $mail = $val;
            }
            if ($key == "facture") {
                $facture = $val;
            }
            if ($key == "comment") {
                $comment = $val;
            }
            if ($key == "note") {
                $note = $val;
            }
            if ($key == "date") {
                $date = $val;
            }
            if ($key == "time") {
                $time = $val;
            }
        }

        echo  "<div class='nameDate'><div class='name'>$firstname $name </div> <div class='dateTime'><span class='date'>$date</span> <span class='time'>$time</span> </div></div>";

        echo  "<div class='note'>Ma note : $note/5</div>";
        echo  "<div class='comment'>$comment</div>";
        echo  "</div>";
        echo   "<hr>";

    }

}
?>
