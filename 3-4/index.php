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
                    $db = new mysqli("localhost:3306", "root", "root", "checktest4");
                    $users = $db->query("select * from users");
                    if ($users) {
                        while ($user = $users->fetch_assoc()) {
                            echo "ようこそ ". $user["last_name"]. $user["first_name"]. " さん";
                        }
                    } else {
                        echo $db->error;
                    }
                ?></p>
                         
            </div>
            <div class="header-right-bottom">
                <p><?php 
                    $db = new mysqli("localhost:3306", "root", "root", "checktest4");
                    $users = $db->query("select * from users");
                    if ($users) {
                        while ($user = $users->fetch_assoc()) {
                            echo "最終ログイン日 : ". $user["last_login"];
                        }
                    } else {
                        echo $db->error;
                    }
                ?></p>
            </div>
        </div>
    </div>
    <div class="main">
        <table border = "1">
            <div class="main-title">
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th><br>
            </div>
        </table>
        <div class="main-posts">
            <p><?php 
                $db = new mysqli("localhost:3306", "root", "root", "checktest4");
                $posts = $db->query("select * from posts order by id desc");
                if ($posts) {
                    while ($post = $posts->fetch_assoc()) {
                        echo $post["id"]. $post["title"]. $post["category"]. $post["comment"]. $post["created"];
                        echo "<br>";
                    }
                } else {
                    echo $db->error;
                }
            ?></p>  
        </div>        
    </div>  
</body>
<div class="footer"><a>Y&I group.inc</a></div>
</html>