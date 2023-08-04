<?php
/* Smarty version 4.3.1, created on 2023-08-04 14:39:38
  from 'C:\xampp\htdocs\UCERTIFY\php-assignment\templates\test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64ccc052990b96_87967037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '232667595b985e80c503c00f67491b0948b928ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\UCERTIFY\\php-assignment\\templates\\test.tpl',
      1 => 1691133845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./inc/head.tpl' => 1,
    'file:./inc/list.tpl' => 1,
    'file:./inc/footer.tpl' => 1,
  ),
),false)) {
function content_64ccc052990b96_87967037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\UCERTIFY\\php-assignment\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender("file:./inc/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h6><b>Q<?php echo $_smarty_tpl->tpl_vars['QUESTION_NO']->value;?>
.</b> <?php echo $_smarty_tpl->tpl_vars['QUESTION']->value['question'];?>
</h6>
        </div>
        <form id="submit_answer" class="mt-2">
            <input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['QUESTION_NO']->value;?>
 id="question_no" />
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUESTION']->value["answers"], 'answers');
$_smarty_tpl->tpl_vars['answers']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['answers']->value) {
$_smarty_tpl->tpl_vars['answers']->do_else = false;
?>
                <div class="col-12 d-flex">
                    <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1">
                            <?php echo smarty_function_cycle(array('values'=>"A ,B ,C, D "),$_smarty_tpl);?>

                            <input type="radio" value=<?php echo $_smarty_tpl->tpl_vars['answers']->value["id"];?>
 data-question=<?php echo $_smarty_tpl->tpl_vars['QUESTION_NO']->value;?>

                                id=<?php echo ("option").($_smarty_tpl->tpl_vars['answers']->value["id"]);?>
 name="option"
                                class="form-check-input mb-1 ms-2 option answer_options" />
                        </span>
                        <label class="form-check-label mt-2 ms-2"
                            for=<?php echo ("option").($_smarty_tpl->tpl_vars['answers']->value["id"]);?>
><?php echo $_smarty_tpl->tpl_vars['answers']->value["answer"];?>
</label>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </form>
    </div>
</div>
<div
    class="bg-secondary text-white w-min-60 p-2 position-fixed end-10 d-flex align-items-center justify-content-evenly flex-wrap">
    <h5 class="mb-2 mb-md-0 mx-3" id="start_time" data-time=<?php echo $_smarty_tpl->tpl_vars['START_TIME']->value;?>
>00:00</h5>
    <button class="px-4 mb-2 mb-md-0 btn btn-light fw-bold" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">List</button>
    <div class="d-flex mb-2 mb-md-0 align-items-center">
        <?php if ($_smarty_tpl->tpl_vars['QUESTION_NO']->value > 1) {?>
            <a class="px-4 ms-5 btn btn-light fw-bold" href=<?php echo ("./test.php?question=").($_smarty_tpl->tpl_vars['QUESTION_NO']->value)-1;?>
>Previous</a>
        <?php } else { ?>
            <button class="px-4 ms-5 btn btn-light text-danger fw-bold" disabled>Previous</button>
        <?php }?>
        <h5 class="mb-0 ms-3 me-3 text-nowrap"><?php echo $_smarty_tpl->tpl_vars['QUESTION_NO']->value;?>
 of 11</h5>
        <?php if ($_smarty_tpl->tpl_vars['QUESTION_NO']->value < 11) {?>
            <a class="px-4 me-5 btn btn-light fw-bold" href=<?php echo ("./test.php?question=").($_smarty_tpl->tpl_vars['QUESTION_NO']->value)+1;?>
>Next</a>
        <?php } else { ?>
            <button class="px-4 me-5 btn btn-light text-danger fw-bold" disabled>Next</button>
        <?php }?>
    </div>
    <button class="px-4 btn mb-2 mb-md-0 btn-light fw-bold open_end_modal" data-bs-toggle="modal"
        data-bs-target="#end_test_modal">End</button>
</div>
<div class="modal fade" id="end_test_modal">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header py-2">
                <h5 class="modal-title ">Confirmation</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
            <p>This action will end your test. Do you want to proceed?</p>
                <div class="row m-0">
                    <div class="col-4 ps-0">
                        <div class="text-center p-2 bg-light">
                            <h4 class="mb-0 text-primary">11</h4>
                            <p class="mb-0">Total</p>
                        </div>
                    </div>
                    <div class="col-4 p-0">
                        <div class="text-center p-2 bg-light">
                            <h4 class="mb-0 text-success" id="end_modal_attempted">0</h4>
                            <p class="mb-0">Attempted</p>
                        </div>
                    </div>
                    <div class="col-4 pe-0">
                        <div class="text-center p-2 bg-light">
                            <h4 class="mb-0 text-warning" id="end_modal_unattempted">0</h4>
                            <p class="mb-0">Unattempted</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer py-2">
                <button class="btn btn-outline-success" data-bs-dismiss="modal">Cancel</button>
                <button class="btn btn-outline-danger end_test_button">End Test</button>
            </div>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:./inc/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
