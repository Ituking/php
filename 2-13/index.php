<?php
    $x = 5.2;
    echo ceil($x);
    echo "<br>";

    $y = 3.7;
    echo floor($y);
    echo "<br>";

    $z = 8.5;
    echo round($z);
    echo "<br>";

    echo pi();
    
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    // 半径が2の円の面積の計算
    circleArea(2);
    echo "<br>";

    echo mt_rand(1, 100);
    echo "<br>";

    $str1 = "yoneyama";
    echo strlen($str1);
    echo "<br>";

    $str2 = "nakamura";
    echo strpos($str2, "a");
    echo "<br>";
    
    $str3 = "yanagita";
    echo substr($str3, -4, 2);
    echo "<br>";

    $str4 = "murakami";
    echo str_replace("raka", "RAKA", $str4);
    echo "<br>";

    $str5 = "I am Yoshida";
    echo str_replace(" ", "", $str5);
    echo "<br>";

    $str6 = "さしすせそ";
    echo mb_strlen($str6);
    echo "<br>";

    $name = "落合さん";
    $limit_number = 40;
    printf("%sの勉強時間は%d時間です。", $name, $limit_number);
    echo "<br>";

    $limit_day = 10;
    $limit_hour = 6;
    $limit_time = sprintf("マイケルたちの脱獄まで%02s日と%02s時間", $limit_day, $limit_hour);
    echo $limit_time;
?>