<?php
    // db_connect.phpの読み込み
    require_once("db_connect.php");

    // function.phpの読み込み
    require_once("function.php");

    // ログインしていなければ、login.phpにリダイレクト
    check_user_logged_in();

    // 登録ボタンが押された場合
    if (!empty($_POST)) {
        // titleとcontentの入力チェック
        if (empty($_POST["title"])) {
            echo 'タイトルが未入力です。';
        } elseif (empty($_POST["date"])) {
            echo '日付が未入力です。';
        } elseif (empty($_POST["stock"])) {
            echo '在庫数を選択してください。';
        }
        
        //titleとdateとstockの3つが送られてきたら処理実行
        if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST["stock"])) {
            // 入力したtitleとcontentを格納
            //本のタイトル名のエスケープ処理
            $title = htmlspecialchars($_POST['title'], ENT_QUOTES);

            // PDOのインスタンスを取得
            $pdo = db_connect();

            $title = $_POST["title"];
            $date = $_POST["date"];
            $stock = $_POST["stock"];

            try {
                // SQL文の準備 FILL_IN
                $sql = "insert into books (title, date, stock) values (:title, :date, :stock)"; 
                // プリペアドステートメントの作成 FILL_IN
                $stmt = $pdo->prepare($sql);
                // 値をセット FILL_IN
                $stmt->bindParam(":title", $title);
                $stmt->bindParam(":date", $date);
                $stmt->bindParam(":stock", $stock);
                // 実行 FILL_IN
                $stmt->execute();
                // 登録完了メッセージ出力
                echo "登録が完了しました。";
                // main.phpにリダイレクト
                header("Location: main.php");
                exit;
            }catch (PDOException $e) {
                // エラーメッセージの出力 FILL_IN
                echo 'Error: '.$e->getMessage();
                // 終了 FILL_IN
                die();
            }  
        } else {
            echo "登録が完了していません。";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h2>本 登録画面</h2>
    <form method="POST" action="">
        <input type="text" name="title" id="title" placeholder="タイトル">
        <br>
        <br>
        <input type="date" name="date" id="date" placeholder="発売日"><br>
        <br>
        在庫数<br>
        <select name="stock" id="stock">
            <option value="">選択してください</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>
        <br>
        <input type="submit" value="登録" id="register" name="register">
    </form>
</body>
</html>
