<?php
//POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST["my_name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
    $what_number = [80, 22, 20, 21];
    $language = ["PHP", "Python", "JAVA", "HTML"];
    $command = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
    $what_number_answer = 80;
    $language_answer = "HTML";
    $command_anser = "select";
?>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
    foreach ($what_number as $what_number_answer) {
        echo $what_number_answer;
    }
?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
