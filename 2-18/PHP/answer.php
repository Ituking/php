<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST["my_name"];
$what_number_selected_answer = $_POST["what_number_selected_answer"];
$what_number_problem_correct = $_POST["what_number_problem_correct"];
$what_language_selected_answer = $_POST["what_language_selected_answer"];
$what_language_problem_correct = $_POST["what_language_problem_correct"];
$what_command_selected_answer = $_POST["what_command_selected_answer"];
$what_command_problem_correct = $_POST["what_command_problem_correct"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function what_number_result($what_number_selected_answer, $what_number_problem_correct) {
    $what_number_selected_answer = $what_number_problem_correct;
    if ($what_number_selected_answer == $what_number_problem_correct) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}

function what_language_result($what_language_selected_answer, $what_language_problem_correct) {
    $what_language_selected_answer = $what_language_problem_correct;
    if ($what_language_selected_answer == $what_language_problem_correct) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}

function what_command_result($what_command_selected_answer, $what_command_problem_correct) {
    $what_command_selected_answer = $what_command_problem_correct;
    if ($what_command_selected_answer == $what_command_problem_correct) {
        echo "正解！";
    } else {
        echo "残念・・・";
    }
}
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $_POST["my_name"]; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
    $result1 = what_number_result($what_number_selected_answer, $what_number_problem_correct);
    echo $result1;
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    $result2 = what_language_result($what_language_selected_answer, $what_language_problem_correct);
    echo $result2;
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
    $result3 = what_command_result($what_command_selected_answer, $what_command_problem_correct);
    echo $result3;
?>