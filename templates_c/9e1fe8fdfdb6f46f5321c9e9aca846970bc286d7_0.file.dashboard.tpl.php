<?php
/* Smarty version 4.3.1, created on 2023-08-04 14:39:34
  from 'C:\xampp\htdocs\UCERTIFY\php-assignment\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ccc04e93f5b3_29277932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e1fe8fdfdb6f46f5321c9e9aca846970bc286d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-assignment\\templates\\dashboard.tpl',
      1 => 1691124734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./inc/head.tpl' => 1,
    'file:./inc/footer.tpl' => 1,
  ),
),false)) {
function content_64ccc04e93f5b3_29277932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col-12 pt-5 text-center mt-5">
        <a href="./inc/start-test.php" class="btn mt-5 btn-outline-success">Start Test</a>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
