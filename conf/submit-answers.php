<?php
require_once(__DIR__ . "/../app/app.php");
$response = [];
if (isset($_POST["answers"]) && !empty($_POST["answers"]) && isset($_SESSION["attempt-id"]) && isset($_SESSION["start-time"])) {
    $start_time = $_SESSION["start-time"];
    $attempt_id = $_SESSION["attempt-id"];
    $answers = $_POST["answers"];

   
    $response["status"] = 200;
    $response["msg"] = "Test Submitted";

    $_SESSION["attempt_answers"] = $answers;
    $_SESSION["test_running"] = "ended";
} else {
    $response["status"] = 500;
    $response["msg"] = "An Error Occurred";
}

echo json_encode($response);
