<?php
    // セッション開始
    session_start();
    // セッション変数のクリア
    $_SESSION = array();
    // セッションクリア
    session_destroy();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/logout.css">
    <title>ログアウト</title>
</head>
    <body>
     <h1>ログアウト画面</h1>
    <div>ログアウトしました</div><br>
    <a href="login.php">ログイン画面に戻る</a>
    </body>
</html>