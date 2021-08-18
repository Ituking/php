<?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $total = 0;
    $kaisu = 1;
    while ($total <= 40) {
        // サイコロを用意する
        $dice = mt_land(1, 6);
        // 40マス以内ですごろくを終了できるようにする
        $total += $dice;
        // 何回目かという表示をするための変数を準備
        $kaisu++;
        echo $kaisu."回目 =".$dice;
        echo "<br>";
    }
    echo "合計".$total."回目でゴールしました";
?>