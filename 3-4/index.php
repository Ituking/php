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
        <table class = "main-title" border = "1">
            <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </tr>  
        </table>
        <table class = "main-posts1" border = "1">
                <?php 
                    $db = new mysqli("localhost:3306", "root", "root", "checktest4");
                    $posts = $db->query("select * from posts where id = 5");
                    if ($posts) {
                        while ($post = $posts->fetch_assoc()) {
                            echo "<tr><td>{$post["id"]}</td><td>{$post["title"]}</td><td>{$post["category"]}</td><td>{$post["comment"]}</td><td>{$post["created"]}</td></tr>";
                        }
                    } else {
                        echo $db->error;
                    }
            ?>
        </table>
        <table class = "main-posts2" border = "1">
                <?php 
                    $db = new mysqli("localhost:3306", "root", "root", "checktest4");
                    $posts = $db->query("select * from posts where id = 4");
                    if ($posts) {
                        while ($post = $posts->fetch_assoc()) {
                            echo "<tr><td>{$post["id"]}</td><td>{$post["title"]}</td><td>{$post["category"]}</td><td>{$post["comment"]}</td><td>{$post["created"]}</td></tr>";
                        }
                    } else {
                        echo $db->error;
                    }
            ?>    
        </table>
        <table class = "main-posts3" border = "1">
                <?php 
                    $db = new mysqli("localhost:3306", "root", "root", "checktest4");
                    $posts = $db->query("select * from posts where id = 3");
                    if ($posts) {
                        while ($post = $posts->fetch_assoc()) {
                            echo "<tr><td>{$post["id"]}</td><td>{$post["title"]}</td><td>{$post["category"]}</td><td>{$post["comment"]}</td><td>{$post["created"]}</td></tr>";
                        }
                    } else {
                        echo $db->error;
                    }
            ?>    
        </table>
        <table class = "main-posts4" border = "1">
                <?php 
                    $db = new mysqli("localhost:3306", "root", "root", "checktest4");
                    $posts = $db->query("select * from posts where id = 2");
                    if ($posts) {
                        while ($post = $posts->fetch_assoc()) {
                            echo "<tr><td>{$post["id"]}</td><td>{$post["title"]}</td><td>{$post["category"]}</td><td>{$post["comment"]}</td><td>{$post["created"]}</td></tr>";
                        }
                    } else {
                        echo $db->error;
                    }
            ?>    
        </table>
        <table class = "main-posts5" border = "1">
                <?php 
                    $db = new mysqli("localhost:3306", "root", "root", "checktest4");
                    $posts = $db->query("select * from posts where id = 1");
                    if ($posts) {
                        while ($post = $posts->fetch_assoc()) {
                            echo "<tr><td>{$post["id"]}</td><td>{$post["title"]}</td><td>{$post["category"]}</td><td>{$post["comment"]}</td><td>{$post["created"]}</td></tr>";
                        }
                    } else {
                        echo $db->error;
                    }
            ?>    
        </table>
    </div>  
</body>
<div class="footer"><a>Y&I group.inc</a></div>
</html>