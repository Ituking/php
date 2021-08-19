<?php
    ini_set(“display_errors”, 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $hour = date("Y-m-d H:i:s" ,time());
    if ($hour >= 0 && $hour <= 12) {
        echo "今.$hour.時台です";
        echo "<br>";
        echo "おはようございます";
    } elseif ($hour >= 13 && $hour <= 17) {
        echo "今.$hour.時台です";
        echo "<br>";
        echo "こんにちは";
    } elseif ($hour >= 18 && $hour <= 24) {
        echo "今.$hour.時台です";
        echo "<br>";
        echo "こんばんは";
    }          
?>