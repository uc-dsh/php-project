<?php
/* Smarty version 4.3.1, created on 2023-08-04 14:41:41
  from 'C:\xampp\htdocs\UCERTIFY\php-assignment\templates\inc\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ccc0cd593f63_95313618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ea2c64508bf031afaa6aa7a56e8a11d2e55f8a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-assignment\\templates\\inc\\head.tpl',
      1 => 1691140299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ccc0cd593f63_95313618 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>PhP Assignment</title>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"><?php echo '</script'; ?>
>
    <style>
        body {
            background-color: rgb(251, 251, 251);
            min-height: 100vh;
        }

        .bg-white {
            background: #fff !important;
        }

        .nav-logo {
            width: 5rem;
        }

        .option {
            /* background: red; */
            border: 2px solid #0539f37b;
            box-shadow: 2px 3px 4px #6a6a6a2d;
        }

        .answer_indicator{
            width: 15px;
            height: 16px;
            left: 5px;
            position: relative;
            margin-top: 12px;
        }
        .fs-smaller {
            font-size: 12px;
        }

        .fs-10{
            font-size: 10px !important;
        }

        .w-min-60{
            width: 55vw;
        }

        #start_time{
            width: 50px !important;
        }

        .end-10{
            right: 10px;
            bottom: 10px;
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-white">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="./assets/images/logo.png" class="img-fluid nav-logo" />
            </a>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                <h3>uCertify Prep Test</h3>
            </div>
        </div>
    </nav>
<div class="container-fluid"><?php }
}
