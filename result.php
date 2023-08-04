<?php
require_once(__DIR__ . "/app/app.php");
$attempt_id = $_SESSION["attempt-id"] ?? header("location:index.php");
$select_result = $_SESSION["attempt_answers"];
$all_json_questions = json_decode(file_get_contents(__DIR__ . "/data/question.json"), true);

$select_questions = $all_json_questions;

$options = [];

if ($select_questions && $select_result) {
    foreach ($select_questions as $no => $question) :
        $decode_question = json_decode($question["content_text"], true);
        $options[] = [];
        foreach ($decode_question["answers"] as $arr_option) :
            $options[$no+1][$arr_option["id"]] =  $arr_option["is_correct"];
        endforeach;
    endforeach;

    if (isset($options[0])) {
        unset($options[0]);
    }

    $smarty_options = json_decode($select_result, true);

    $result = ["correct" => 0, "wrong" => 0, "unattempted" => 0, "percentage" => 0];

    foreach ($options as $question_no => $data_options) {
        $is_attempted = false;
        foreach ($data_options as $option_id => $single_option) {
            if (isset($smarty_options[$question_no]) && "option" . $option_id == $smarty_options[$question_no] && $single_option == 1) {
                $is_attempted = true;
                $result["correct"] += 1;
            } elseif (isset($smarty_options[$question_no]) && "option" . $option_id == $smarty_options[$question_no] && $single_option == 0) {
                $is_attempted = true;
                $result["wrong"] += 1;
            }
        }
        if (!$is_attempted) {
            $result["unattempted"] += 1;
        }
    }

    $total_question = array_sum($result);
    $result["percentage"] = $result["correct"] / $total_question * 100;

    $smarty->assign([
        "QUESTIONS" => $select_questions,
        "ANSWERS" => $smarty_options,
        "OPTIONS" => $options,
        "RESULT" => $result
    ]);


    if (isset($_GET["question"]) && !empty($_GET["question"])) {
        if (isset($select_questions[((int) $_GET["question"]) - 1])) {

            $question = json_decode($select_questions[((int) $_GET["question"]) - 1]["content_text"], true);
            $smarty->assign("QUESTION_NO", $_GET["question"]);
            $smarty->assign("QUESTIONS", $question);

            $smarty->display("extends:[tempDir]result-answers.tpl");
        } else {
            $smarty->display("extends:[tempDir]result.tpl");
        }
    } else {
        $smarty->display("extends:[tempDir]result.tpl");
    }
}
