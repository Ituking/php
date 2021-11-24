<?php
// DB名
define('DB_DATABASE', 'checktest4');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
define('DB_PASSWORD', 'root');
// DSN
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

// 実行したいSQL文を準備
$sql = "select * from posts";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
    function db_connect() {
        try {
            // PDOインスタンスの作成
            $pdh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
            // エラーの処理方法の設定
            $pdh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdh;
        } catch (exception $e) {
            echo "ERROR:". $e->getMessage();
            die();
        }
    }
?>