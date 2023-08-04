<?php
/* Smarty version 4.3.1, created on 2023-08-04 14:40:45
  from 'C:\xampp\htdocs\UCERTIFY\php-assignment\templates\result-answers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ccc095a58216_41496237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91eedd0b88211ff77fde4c100af3b7599faa7165' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-assignment\\templates\\result-answers.tpl',
      1 => 1691139636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./inc/head.tpl' => 1,
    'file:./inc/footer.tpl' => 1,
  ),
),false)) {
function content_64ccc095a58216_41496237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-assignment\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender("file:./inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row ">
        <div class="w-100 text-center">
            <h3 class="my-4" id="answer_status_container">
            </h3>
        </div>
        <div class="col-12">
            <h6><b>Q<?php echo $_smarty_tpl->tpl_vars['QUESTION_NO']->value;?>
.</b> <?php echo $_smarty_tpl->tpl_vars['QUESTIONS']->value['question'];?>
</h6>
        </div>
        <form id="submit_answer" class="mt-2">
            <input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['QUESTION_NO']->value;?>
 id="question_no" />
            <?php $_smarty_tpl->_assignInScope('is_wrong', true);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPTIONS']->value[$_smarty_tpl->tpl_vars['QUESTION_NO']->value], 'iter_option', false, 'option_key');
$_smarty_tpl->tpl_vars['iter_option']->iteration = 0;
$_smarty_tpl->tpl_vars['iter_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_key']->value => $_smarty_tpl->tpl_vars['iter_option']->value) {
$_smarty_tpl->tpl_vars['iter_option']->do_else = false;
$_smarty_tpl->tpl_vars['iter_option']->iteration++;
$__foreach_iter_option_0_saved = $_smarty_tpl->tpl_vars['iter_option'];
?>
                <?php $_smarty_tpl->_assignInScope('option_class', '"form-check-label mt-2 ms-2 text-muted"');?>
                <?php if ((isset($_smarty_tpl->tpl_vars['ANSWERS']->value[$_smarty_tpl->tpl_vars['QUESTION_NO']->value])) && $_smarty_tpl->tpl_vars['ANSWERS']->value[$_smarty_tpl->tpl_vars['QUESTION_NO']->value] == ("option").($_smarty_tpl->tpl_vars['option_key']->value) && $_smarty_tpl->tpl_vars['iter_option']->value === "1") {?>
                    <?php $_smarty_tpl->_assignInScope('is_wrong', false);?>
                    <?php $_smarty_tpl->_assignInScope('option_class', '"form-check-label mt-2 ms-2 text-success"');?>
                <?php } elseif ((isset($_smarty_tpl->tpl_vars['ANSWERS']->value[$_smarty_tpl->tpl_vars['QUESTION_NO']->value])) && $_smarty_tpl->tpl_vars['ANSWERS']->value[$_smarty_tpl->tpl_vars['QUESTION_NO']->value] == ("option").($_smarty_tpl->tpl_vars['option_key']->value) && $_smarty_tpl->tpl_vars['iter_option']->value === "0") {?>
                    <?php $_smarty_tpl->_assignInScope('option_class', '"form-check-label mt-2 ms-2 text-danger"');?>
                <?php } elseif ($_smarty_tpl->tpl_vars['iter_option']->value === "1") {?>
                    <?php $_smarty_tpl->_assignInScope('option_class', '"form-check-label mt-2 ms-2 text-success wrong"');?>
                <?php }?>
                <div class="col-12 d-flex">
                    <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1">
                            <?php echo smarty_function_cycle(array('values'=>"A ,B ,C, D "),$_smarty_tpl);?>

                            <input type="radio" value=<?php echo $_smarty_tpl->tpl_vars['option_key']->value;?>

                                <?php if ($_smarty_tpl->tpl_vars['option_class']->value === '"form-check-label mt-2 ms-2 text-danger"') {?> checked
                                <?php } elseif ($_smarty_tpl->tpl_vars['option_class']->value === '"form-check-label mt-2 ms-2 text-success"') {?> checked 
                                <?php }?>
                                disabled class="option mb-1 ms-2 form-check-input" />
                        </span>
                        <label class=<?php echo $_smarty_tpl->tpl_vars['option_class']->value;?>
><?php echo $_smarty_tpl->tpl_vars['QUESTIONS']->value["answers"][$_smarty_tpl->tpl_vars['iter_option']->iteration-1]["answer"];?>
</label>
                        <?php if ($_smarty_tpl->tpl_vars['option_class']->value === '"form-check-label mt-2 ms-2 text-danger"') {?>
                            <img src="./assets/images/wrong.png" class="img-fluid answer_indicator" />
                        <?php } elseif ($_smarty_tpl->tpl_vars['option_class']->value === '"form-check-label mt-2 ms-2 text-success"' || $_smarty_tpl->tpl_vars['option_class']->value === '"form-check-label mt-2 ms-2 text-success wrong"') {?>
                            <img src="./assets/images/right.png" class="img-fluid answer_indicator" />
                        <?php }?>
                    </div>
                </div>
            <?php
$_smarty_tpl->tpl_vars['iter_option'] = $__foreach_iter_option_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </form>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['is_wrong']->value) {?>
        <span class="d-none answer_status" data-correct="no">Incorrect</span>
    <?php } else { ?>
        <span class="d-none answer_status" data-correct="yes">Correct</span>
    <?php }?>

    <div class="col-12 mt-5">
        <h5 class="border-bottom border-dark">Explanation</h5>
        <p><?php echo nl2br((string) $_smarty_tpl->tpl_vars['QUESTIONS']->value['explanation'], (bool) 1);?>
</p>
    </div>
</div>


<div
    class="bg-secondary text-white p-2 w-auto position-fixed bottom-0 end-0 d-flex align-items-center justify-content-evenly flex-wrap">
    <div class="d-flex mb-2 mb-md-0 align-items-center">
        <a class="px-4 mx-4 btn btn-light fw-bold" href="./result.php">Go Back</a>
        <?php if ($_smarty_tpl->tpl_vars['QUESTION_NO']->value > 1) {?>
            <a class=" px-4 mx-4 btn btn-light fw-bold" href=<?php echo ("./result.php?question=").($_smarty_tpl->tpl_vars['QUESTION_NO']->value)-1;?>
>Previous</a>
        <?php } else { ?>
            <button class="px-4 mx-4 btn btn-light text-danger fw-bold" disabled>Previous</button>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['QUESTION_NO']->value < 11) {?>
            <a class="px-4 mx-4 btn btn-light fw-bold" href=<?php echo ("./result.php?question=").($_smarty_tpl->tpl_vars['QUESTION_NO']->value)+1;?>
>Next</a>
        <?php } else { ?>
            <button class="px-4 mx-4 btn btn-light text-danger fw-bold" disabled>Next</button>
        <?php }?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:./inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
