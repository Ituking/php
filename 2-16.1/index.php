<?php
    $test_file = "test.txt";
    $contents = "ごきげんよう";

    if (is_writable($test_file)) {
        $fp = fopen($test_file, "w");
        fwrite($fp, $contents);
        fclose($fp);
        echo "書き込みが終わりました。";
    } else {
        echo "書き込みができませんでした。";
        exit;
    }
?>