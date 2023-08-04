<?php

declare(strict_types=1);

session_start();
date_default_timezone_set("Asia/Kolkata");

const TEMPLATE404 = "./templates/error-404.tpl";

require_once(__DIR__ . "/../libs/Smarty.class.php");
// require_once(__DIR__ . "/sql.php");

// use MySql\SqlConnect;

$smarty = new Smarty();
$smarty->default_template_handler_func = "page404";
$smarty->setTemplateDir(["tempDir" => "./templates/"]);
$smarty->registerPlugin('modifier', 'substr', 'smarty_modifier_substr_custom');

// $SqlWorker = new SqlConnect();

function smarty_modifier_substr_custom(string $string, int $start = 0, int $length = null)
{
    return substr($string, $start, $length);
}

function page404(): string
{
    return TEMPLATE404;
}
