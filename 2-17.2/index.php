<?php 
    //タイムゾーンを日本時間に設定
    date_default_timezone_set("Asia/Tokyo");
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