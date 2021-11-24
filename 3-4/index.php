<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="header-left">
            <img class="header-left-image" src="image/logo.png">
        </div>
        <div class="header-right">
            <div class="header-right-top">
                <p><?php
                    // 作成したgetData.phpを読み込む
                    require_once("getData.php");
                    
                    // 実行したいSQL文を準備
                    $sql = "select * from users";
                    // 関数db_connect()からPDOを取得する
                    $pdo = db_connect();

                    try {
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                
                        // ループ文を使用して、1行ずつ読み込んで$rowに代入する
                        // 読み込むものがなくなったらループ終了
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "ようこそ ". $row["last_name"]. $row["first_name"]. " さん";
                        }
                    } catch (PDOException $e) {
                        echo "ERROR:". $e->getMessage();
                        die();
                    }
                ?></p>
                         
            </div>
            <div class="header-right-bottom">
                <p><?php 
                    // 作成したgetData.phpを読み込む
                    require_once("getData.php");
                    
                    // 実行したいSQL文を準備
                    $sql = "select * from users";
                    // 関数db_connect()からPDOを取得する
                    $pdo = db_connect();

                    try {
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                
                        // ループ文を使用して、1行ずつ読み込んで$rowに代入する
                        // 読み込むものがなくなったらループ終了
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "最終ログイン日 : ". $row["last_login"];
                        }
                    } catch (PDOException $e) {
                        echo "ERROR:". $e->getMessage();
                        die();
                    }    
                ?></p>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="main-top">
            <p>記事ID タイトル カテゴリ 本文 投稿日</p>
            <br>
        </div>
        <div class="main-bottom">
            <p><?php 
            // 作成したgetData.phpを読み込む
            require_once("getData.php");

            // 実行したいSQL文を準備
            $sql = "select * from posts order by id desc";
            // 関数db_connect()からPDOを取得する
            $pdo = db_connect();

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->execute();

                // ループ文を使用して、1行ずつ読み込んで$rowに代入する
                // 読み込むものがなくなったらループ終了
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo $row["id"].$row["title"].$row["comment"].$row["created"];
                    echo "<br>";
                }
            } catch (PDOException $e) {
                echo "ERROR:". $e->getMessage();
                die();
            }
            ?></p>
        </div>
    </div>  
</body>
<div class="footer"><a>Y&I group.inc</a></div>
</html>