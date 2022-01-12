<?php
// db_connect.phpの読み込みFILL_IN
require ("db_connect.php");

// POSTで送られていれば処理実行
if (isset($_POST["signUp"])) {
    // nameとpassword両方送られてきたら処理実行
    if (!isset($_POST["name"]) && !isset($_POST["password"])) {
        echo "登録が完了しました。";
    } else {
        echo "登録が完了していません。";
    }
}

function db_connect() {
    try {
        // PDOインスタンスの作成
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        // エラー処理方法の設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}

$pdo = db_connect();
// PDOのインスタンスを取得FILL_IN
$pdh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
try {
    // SQL文の準備 FILL_IN
    $sql = "insert into users (name, password) values ($userName, $userPassword)"; 
    // パスワードをハッシュ化
    $password_hash = password_hash($userPassword, PASSWORD_DEFAULT);
    // プリペアドステートメントの作成 FILL_IN
    $stmt = $pdo->prepare($sql);
    // 値をセット FILL_IN
    $stmt->bindParam(":name", $userName);
    $stmt->bindParam(":password", $userPassword);
    // 実行 FILL_IN
    $stmt->execute();
    // 登録完了メッセージ出力
    echo "登録が完了しました。";
}catch (PDOException $e) {
    // エラーメッセージの出力 FILL_IN
    echo "登録が完了していません。";
    // 終了 FILL_IN
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>新規登録</h1>
<form method="POST" action="main.php">
user:<br>
<input type="text" name="name" id="name">
<br>
password:<br>
<input type="password" name="password" id="password"><br>
<input type="submit" value="submit" id="signUp" name="signUp">

</form>
</body>
</html>