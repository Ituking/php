<?php
// db_connect.phpの読み込み
require_once("db_connect.php");

// function.phpの読み込み
require_once("function.php");

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// URLの?以降で渡されるIDをキャッチ
$id = $_GET['id'];
// もし、$idが空であったらmain.phpにリダイレクト
// 不正なアクセス対策
if (empty($id)) {
    header("Location: main.php");
    exit;
}

// PDOのインスタンスを取得
$pdo = db_connect();
if (!empty($_POST)) {
    try {
        // SQL文の準備
        $sql = "delete from 'books' where 'books'.'id' = ':id'";
        // プリペアドステートメントの作成
        $stmt = $pdo->prepare($sql);
        // idのバインド
        $stmt->bindParam(':id', $id);
        // 実行
        $stmt->execute();
        // main.phpにリダイレクト
        // header("Location: main.php");
        exit;
    } catch (PDOException $e) {
        // エラーメッセージの出力
        echo 'Error: ' . $e->getMessage();
        // 終了
        die();
    }
} 
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/delete_books.css">
    <title>削除</title>
</head>
    <body>
     <h1>削除画面</h1>
    <div>削除しました</div><br>
    <a href="main.php">在庫一覧画面に戻る</a>
    </body>
</html>