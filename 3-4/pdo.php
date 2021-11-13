<?php
// DB名
define('DB_DATABASE', 'checktest4');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
define('DB_PASSWORD', 'root');
// DSN
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

    function db_connect() {
        try {
            // PDOインスタンスの作成
            $pdh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
            // エラーの処理方法の設定
            
            //  データベースの処理において接続障害が起きた場合
            throw new exception("接続障害です。");
        } catch (exception $e) {

        }
    }
?>