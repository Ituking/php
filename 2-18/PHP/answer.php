<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_post["my_name"];
$selected_answer = $_post["selected_answer"];
$problem_correct = $_post["problem_correct"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function result_display($selected_answer, $problem_correct) {
    if ($selected_answer == $problem_correct) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    $result1 = result_display($selected_answer, $problem_correct);
    echo $result1;
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    $result2 = result_display($selected_answer, $problem_correct);
    echo $result2;
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    $result3 = result_display($selected_answer, $problem_correct);
    echo $result3;
?>