<?php
    $hour = date("H" ,time());
    if ($hour >= 0 && $hour <= 12) {
        echo "今".$hour."時台です";
        echo "<br>";
        echo "おはようございます";
    } elseif ($hour >= 13 && $hour <= 17) {
        echo "今".$hour."時台です";
        echo "<br>";
        echo "こんにちは";
    } elseif ($hour >= 18 && $hour <= 24) {
        echo "今".$hour."時台です";
        echo "<br>";
        echo "こんばんは";
    }          
?>