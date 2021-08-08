<?php 
    $members1 = ["senga", "yamamoto", "kuribayashi", "taira", "morishita"];
    echo count($members1);
    echo "<br>";

    $members1 = ["senga", "yamamoto", "kuribayashi", "taira", "morishita"];
    sort($members1);
    var_dump($members1);
    echo "<br>";

    $numbers = [6, 3, 1, 7, 8, 9];
    sort($numbers);
    var_dump($numbers);
    echo "<br>";

    var_dump(in_array("yamamoto", $members1));
    echo "<br>";

    if (in_array("senga", $members1)) {
        echo "千賀さんがいるよ。";
    } else {
        echo "千賀さんはいません。";
    }
    echo "<br>";

    $members2 = ["yamada", "kikuchi", "suzuki", "kai", "yanagita", "murakami"];
    $atstr = implode("@", $members2);
    var_dump($atstr);
    echo "<br>";

    $re_members = explode("@", $atstr);
    var_dump($re_members);
?>
