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
    <link rel="stylesheet" href="../CSS/main.css">
    <title>メイン</title>
</head>
<body>
    <h1>在庫一覧画面</h1>
    <div class="header">
            <form action="register.php" method="POST">
                <button type="submit" class="register">新規登録</button>
            </form><br>
        <form action="logout.php" method="POST">
            <button type="submit" class="logout">ログアウト</button>
        </form>
    </div>
    <div class="main">
            <table>
                <tr>
                    <th class="nowrap">タイトル</th>
                    <th class="nowrap">発売日</th>
                    <th class="nowrap">在庫数</th>
                    <th></th>
                </tr>        
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <form action="delete_books.php" method="post">
                            <td><button type="submit" name="delete" onclick="alert('削除しますか？')" class="delete">削除</button></td>
                        </form>   
                    </tr>
                <?php } ?>
            </table>
    </div>
</body>
</html>