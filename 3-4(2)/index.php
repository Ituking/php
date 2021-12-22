<?php 
    require_once("pdo.php");
    require_once("getData.php");

    $category = ["category_no" => ["1" => "食事", "2" => "旅行", "3" => "その他"]];
    
    $a = new getData();
    $b = $a->getPostData();
    
?>
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
            <div class="header-right-top"></div>
            <div class="header-right-bottom"></div>
        </div>
    </div>
    <div class="main">
        <div class="main-title">
            <table border="1">
                <th>記事ID</th>
                <th>タイトル</th>
                <th>カテゴリ</th>
                <th>本文</th>
                <th>投稿日</th>
            </table>
        </div>
        <div class="main-posts">
            <table border="1">
                    <?php 
                        foreach ($b as $c) { ?>
                          <tr>
                            <td><?php echo $c["id"] ?></td>
                            <td><?php echo $c["title"] ?></td>
                            <td><?php 
                                if ($category["category_no"] == 1) {
                                    echo "食事";
                                } elseif ($category["category_no"] == 2) {
                                    echo "旅行";
                                } else {
                                    echo "その他";
                                } ?>
                            </td>
                            <td><?php echo $c["comment"] ?></td>
                            <td><?php echo $c["created"] ?></td>
                        </tr>
                    <?php    } ?>
                
                    
                
            </table>
        </div>   
    </div>
    <div class="footer">

    </div>
</body>
</html>