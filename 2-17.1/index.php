<?php
    $total = 0;
    $kaisu = 0;
    while ($total < 40) {
        // サイコロを用意する
        $dice = mt_rand(1, 6);
        // 40マス以内ですごろくを終了できるようにする
        $total += $dice;
        $kaisu++;
        // 何回目かという表示をするための変数を準備
        echo $kaisu."回目 = ".$dice;
        echo "<br>";
    }
    echo "合計".$kaisu."回目でゴールしました";
?>