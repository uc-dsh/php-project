<?php
require_once(__DIR__ . "/app/app.php");
$all_json_questions = json_decode(file_get_contents(__DIR__ . "/data/question.json"), true);
echo "<pre>";
// print_r($all_json_questions);
echo "</pre>";
$question_no = $_GET["question"] ?? 1;
$question_no_fetch = $question_no - 1;
$_SESSION["start-time"] && $_SESSION["attempt-id"] && $_SESSION["test_running"] ?? header("location: index.php");

$questions_context = [$all_json_questions[$question_no_fetch]];
// print_r($questions_context);
$all_question = $all_json_questions;

if ($questions_context) {
    $question = json_decode($questions_context[0]["content_text"], true);
    $smarty->assign([
        "QUESTION" => $question,
        "ALL_QUESTIONS" => $all_question,
        "QUESTION_NO" => $question_no,
        "START_TIME" => $_SESSION["start-time"]
    ]);

    if ($_SESSION["test_running"] === "running") {
        $smarty->display("extends:[tempDir]test.tpl");
    } else {
        header("location:result.php");
    }
}
