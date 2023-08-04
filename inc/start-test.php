<?php
require_once(__DIR__ . "/../app/app.php");
$startTime = date("H:i:s");
$_SESSION["start-time"] = $startTime;
$_SESSION["test_running"] = "running";
$_SESSION["attempt-id"] = bin2hex(random_bytes(5));
header("location:../test.php");
