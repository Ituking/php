<?php
    $x = 0;
    $i = 0;
    while ($x < 40) {
        $i++;
        $s = mt_rand(1, 6);
        echo $i. "回目 = ". $s;
        echo "<br>";
        $x += $s;
    }
    echo "合計". $i. "回目でゴールしました";
?>