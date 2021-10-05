<?php
//POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST["my_name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
    $what_number = [80, 22, 20, 21];
    $language = ["PHP", "Python", "JAVA", "HTML"];
    $command = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
    $what_number_correct = 80;
    $language_correct = "HTML";
    $command_correct = "select";
?>
<form action="answer.php" method="POST">
    <p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $_POST["my_name"]; ?><input type="hidden" name="my_name" value="<?php echo $my_name; ?>">さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2> 
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($what_number as $a): ?>
    <input type="radio" name="port" value="<?php echo $a; ?>"><?php echo $a; ?>
<?php endforeach ?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($language as $b): ?>
    <input type="radio" name="language" value="<?php echo $b; ?>"><?php echo $b; ?>
<?php endforeach ?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($command as $c): ?>
    <input type="radio" name="command" value="<?php echo $c; ?>"><?php echo $c; ?>
<?php endforeach ?><br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <button type="submit">回答する</button>
    <input type="hidden" name="what_number_correct" value="<?php echo $what_number_correct; ?>">
    <input type="hidden" name="language_correct" value="<?php echo $language_correct; ?>">
    <input type="hidden" name="command_correct" value="<?php echo $command_correct; ?>">
</form>
