<?php
/* Smarty version 4.3.1, created on 2023-08-04 14:40:27
  from 'C:\xampp\htdocs\UCERTIFY\php-assignment\templates\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ccc083249281_07900012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d794587868304abeb545b10a38c516f78f717f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-assignment\\templates\\result.tpl',
      1 => 1691139799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./inc/head.tpl' => 1,
    'file:./inc/footer.tpl' => 1,
  ),
),false)) {
function content_64ccc083249281_07900012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container my-3">
    <div class="row m-0">
        <div class="col-12 mx-0 d-flex justify-content-center my-4 row">
            <div class="col-md-2 text-center">
                <div class="bg-white rounded shadow p-2 bg-opacity-25">
                    <h5 class="mb-0"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( $_smarty_tpl->tpl_vars['RESULT']->value["percentage"],0,4 ));?>
%</h5>
                    <p class="mb-0">Result</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="bg-white rounded shadow p-2 bg-opacity-25">
                    <h5 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['RESULT']->value["correct"];?>
</h5>
                    <p class="mb-0">Correct</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="bg-white rounded shadow p-2 bg-opacity-25">
                    <h5 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['RESULT']->value["wrong"];?>
</h5>
                    <p class="mb-0">Wrong</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="bg-white rounded shadow p-2 bg-opacity-25">
                    <h5 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['RESULT']->value["unattempted"];?>
</h5>
                    <p class="mb-0">Unattempted</p>
                </div>
            </div>
        </div>
        <table class="table border mb-5 border-dark">
            <thead>
                <tr class="table-dark">
                    <th>Q. No.</th>
                    <th>Question</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUESTIONS']->value, 'question');
$_smarty_tpl->tpl_vars['question']->iteration = 0;
$_smarty_tpl->tpl_vars['question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->do_else = false;
$_smarty_tpl->tpl_vars['question']->iteration++;
$__foreach_question_0_saved = $_smarty_tpl->tpl_vars['question'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['question']->iteration;?>
</td>
                        <td>
                            <a href=<?php echo ("./result.php?question=").($_smarty_tpl->tpl_vars['question']->iteration);?>

                                class="text-decoration-none text-dark">
                                <b class="badge bg-secondary me-2"></b>
                                <?php echo $_smarty_tpl->tpl_vars['question']->value["snippet"];?>

                            </a>
                        </td>
                        <td>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPTIONS']->value[$_smarty_tpl->tpl_vars['question']->iteration], 'iter_option', false, 'option_key');
$_smarty_tpl->tpl_vars['iter_option']->iteration = 0;
$_smarty_tpl->tpl_vars['iter_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_key']->value => $_smarty_tpl->tpl_vars['iter_option']->value) {
$_smarty_tpl->tpl_vars['iter_option']->do_else = false;
$_smarty_tpl->tpl_vars['iter_option']->iteration++;
$__foreach_iter_option_1_saved = $_smarty_tpl->tpl_vars['iter_option'];
?>
                                <?php $_smarty_tpl->_assignInScope('option_class', '"rounded-pill badge border border-secondary text-muted"');?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['ANSWERS']->value[$_smarty_tpl->tpl_vars['question']->iteration])) && $_smarty_tpl->tpl_vars['ANSWERS']->value[$_smarty_tpl->tpl_vars['question']->iteration] == ("option").($_smarty_tpl->tpl_vars['option_key']->value) && $_smarty_tpl->tpl_vars['iter_option']->value === "1") {?>
                                    <?php $_smarty_tpl->_assignInScope('option_class', '"rounded-pill badge bg-success border border-2 border-secondary text-white"');?>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['ANSWERS']->value[$_smarty_tpl->tpl_vars['question']->iteration])) && $_smarty_tpl->tpl_vars['ANSWERS']->value[$_smarty_tpl->tpl_vars['question']->iteration] == ("option").($_smarty_tpl->tpl_vars['option_key']->value) && $_smarty_tpl->tpl_vars['iter_option']->value === "0") {?>
                                    <?php $_smarty_tpl->_assignInScope('option_class', '"rounded-pill badge bg-danger border border-2 border-danger text-white"');?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['iter_option']->value === "1") {?>
                                    <?php $_smarty_tpl->_assignInScope('option_class', '"rounded-pill badge border border-2 text-success border-success"');?>
                                <?php }?>
                                <span class=<?php echo $_smarty_tpl->tpl_vars['option_class']->value;?>
>
                                    <?php echo $_smarty_tpl->tpl_vars['iter_option']->iteration;?>

                                </span>
                            <?php
$_smarty_tpl->tpl_vars['iter_option'] = $__foreach_iter_option_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>
<div
    class="bg-secondary bg-opacity text-white p-2 w-auto position-fixed bottom-0 end-0 d-flex align-items-center justify-content-evenly flex-wrap">
    <div class="d-flex mb-2 mb-md-0 align-items-center">
        <a class="px-4 mx-4 btn btn-light fw-bold" href="./index.php">Dashboard</a>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
