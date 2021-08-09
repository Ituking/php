<?php
    $test_file = "test2.txt";

    if (is_readable($test_file)) {
        $fp = fopen($test_file, "r");
        while ($line = fgets($fp)) {
            echo $line."<br>";
        }
        fclose($fp);
    } else {
        echo "残念ながら読み込めませんでした.";
        exit;
    }
?>