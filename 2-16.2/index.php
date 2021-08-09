<?php
    $testfile = "test.txt";
    $contents = "ひとつよしなに。";

    if (is_writable($testfile)) {
        $fp = fopen($testfile, "a");
        fwrite($fp, $contents);
        fclose($fp);
        echo "書き込み完了です。";
    } else {
        echo "書き込みができませんでした。";
        exit;
    }
?>