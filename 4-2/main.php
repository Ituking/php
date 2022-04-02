<?php
    // db_connect.phpとfunction.phpの読み込み
    require_once("db_connect.php");
    require_once("function.php");
    
    // ログインしていなければ、login.phpにリダイレクト
    check_user_logged_in();

    // 関数db_connect()からPDOを取得する
    $pdo = db_connect();
    try {
        // 実行するSQL文を準備
        $sql = "SELECT * FROM books ORDER BY id DESC";
        // プリペアドステートメントの作成
        $stmt = $pdo->prepare($sql);
        // 実行
        $stmt->execute();
    } catch (PDOException $e) {
        // エラーメッセージの出力
        echo 'Error: ' . $e->getMessage();
        // 終了
        die();
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>在庫一覧画面</h1>
    <form action="" method="POST">
        <input type="submit" value="新規登録" id="register" name="register">
        <input type="submit" value="ログアウト" id="logout" name="logout">
    </form><br>
    <div class="main">
        <div class="main-title">
            <table>
            <tr>
                <td>タイトル</td>
                <td>発売日</td>
                <td>在庫数</td>
                <td></td>
                <td></td>
            </tr>    
            </table>     
        </div>
        <div class="information">
            <table>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <td><input type="submit" value="削除" id="delete" name="delete"></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>