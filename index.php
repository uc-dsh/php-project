<?php
require_once(__DIR__ . "/app/app.php");
session_destroy();
$smarty->display("extends:[tempDir]dashboard.tpl");
